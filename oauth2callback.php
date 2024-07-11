<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");

function decode_google_auth_credential($credential){
	return json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $credential)[1]))));
}

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method. Only POST is allowed.');
    }

    // Logging the received POST data
    error_log('POST data: ' . print_r($_POST, true));

    if (!isset($_POST['credential'])) {
        throw new Exception('No credential found in POST request');
    }

    $id_token = $_POST['credential'];
	$decoded_credentials = decode_google_auth_credential($id_token);
	$email = $decoded_credentials->email;
	$name = $decoded_credentials->name;
    if (strpos($email, '@nitc.ac.in') !== false) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        echo 'success';
    } else {
        echo 'Invalid email domain';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    error_log($e->getMessage());
}
?>
