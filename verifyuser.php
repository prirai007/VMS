<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

// Retrieve user details from session
$name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : '';
$email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : '';
$roll_num = isset($_SESSION['roll_num']) ? $_SESSION['roll_num'] : '';
$batch = isset($_SESSION['batch']) ? $_SESSION['batch'] : '';
$department = isset($_SESSION['department']) ? $_SESSION['department'] : '';
?>
