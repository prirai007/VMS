<?php
session_start();
require_once 'vendor/autoload.php';

$client = new Google_Client(['client_id' => '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com']);  // Specify your client ID
$id_token = $_POST['idtoken'];
$payload = $client->verifyIdToken($id_token);

if ($payload) {
    $email = $payload['email'];
    if (strpos($email, '@nitc.ac.in') !== false) {
        $_SESSION['user_email'] = $email;
        echo 'success';
    } else {
        echo 'Invalid email domain';
    }
} else {
    echo 'Invalid ID token';
}
?>
