<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<?php
    session_start();

    // Check if the user is not logged in
    if (!isset($_SESSION["admin"])) {
        header("Location: index.php");
        exit();
    }

    
    $r_n = $_SESSION['roll_num'];
    $batc = $_SESSION['batchu'];
?>