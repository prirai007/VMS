<?php
require_once 'vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client.json');
$client->setRedirectUri('http://localhost:4000/oauth2callback.php'); // Ensure this matches your Google Cloud Console setting
$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL);
$client->addScope(Google_Service_Oauth2::USERINFO_PROFILE);

// Authenticate the code
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (isset($token['error'])) {
        echo 'Authentication Error: ' . htmlspecialchars($token['error']);
        exit;
    }
    $client->setAccessToken($token['access_token']);

    // Get user info
    $oauth2 = new Google_Service_Oauth2($client);
    $userInfo = $oauth2->userinfo->get();

    // Store user info in session or database
    $_SESSION['user_email'] = $userInfo->email;
    $_SESSION['user_name'] = $userInfo->name;

    // Redirect to the admin landing page or another secure page
    header('Location: admin_landing.php');
    exit;
}

// If there's an error during the authentication
if (isset($_GET['error'])) {
    echo 'Authentication Error: ' . htmlspecialchars($_GET['error']);
    exit;
}

// If the user is not authenticated, redirect to the login page
if (!isset($_SESSION['access_token'])) {
    header('Location: login.php');
    exit;
}
?>
