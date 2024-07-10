<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");

require_once 'vendor/autoload.php';
session_start();

$client = new Google_Client(['client_id' => '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com']);

$id_token = $_POST['credential'];
$payload = $client->verifyIdToken($id_token);

if ($payload) {
    $email = $payload['email'];
    if (strpos($email, '@nitc.ac.in') !== false) {
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $payload['name'];
        header('Location: landing.php');
        exit;
    } else {
        echo 'Invalid email domain';
    }
} else {
    echo 'Invalid ID token';
}
?>
