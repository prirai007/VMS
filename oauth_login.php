<?php
session_start();
require_once 'vendor/autoload.php';

// Load your client configuration
$client = new Google_Client(['client_id' => '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com']);  // Specify your client ID

// Get the credential from the POST request
$credential = $_POST['credential'];

try {
    // Verify the ID token
    $payload = $client->verifyIdToken($credential);

    if ($payload) {
        $email = $payload['email'];
        if (strpos($email, '@nitc.ac.in') !== false) {
            // Store user information in session
            $_SESSION['user_email'] = $email;
            $_SESSION['user_name'] = $payload['name'];
            echo 'success';
        } else {
            echo 'Invalid email domain';
        }
    } else {
        echo 'Invalid ID token';
    }
} catch (Exception $e) {
    echo 'Authentication error: ' . $e->getMessage();
}
?>
