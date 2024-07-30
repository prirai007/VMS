<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");

session_start();

// Clear the session data
session_unset();
session_destroy();

// Redirect to the login page
header("Location: success_exit.php");
exit();
?>
