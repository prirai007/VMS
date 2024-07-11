<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require_once 'vendor/autoload.php';

header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");

try {
    $client = new Google_Client(['client_id' => '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com']);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method. Only POST is allowed.');
    }

    // Logging the received POST data
    error_log('POST data: ' . print_r($_POST, true));

    if (!isset($_POST['credential'])) {
        throw new Exception('No credential found in POST request');
    }

    $id_token = $_POST['credential'];
    $payload = $client->verifyIdToken($id_token);

    if (!$payload) {
        throw new Exception('Invalid ID token');
    }

    $email = $payload['email'];
    if (strpos($email, '@nitc.ac.in') !== false) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $payload['name'];
        echo 'success';
    } else {
        echo 'Invalid email domain';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    error_log($e->getMessage());
}
?>
