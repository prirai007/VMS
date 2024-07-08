<?php
require_once 'vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID');
$client->setClientSecret('YOUR_CLIENT_SECRET');
$client->setRedirectUri('http://localhost/oauth2callback'); // Update this with your redirect URI
$client->addScope("email");
$client->addScope("profile");

// Generate the URL to request authorization
$authUrl = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <button class="google-signin-button" onclick="window.location.href='<?php echo $authUrl; ?>'">Sign in with Google</button>
    </div>
</body>
</html>
