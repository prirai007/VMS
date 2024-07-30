<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
include('dbconfig.php');
include('verifyuser.php');

$r_n = $_SESSION['roll_num'];
$sql = "SELECT * FROM voting_response WHERE roll_number = '$r_n' and elections = 'BR Elections'";
$query_run = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($query_run);

if ($rowCount <= 0) {
    header("Location: cast_voteBR_final.php");
} else {
    header("Location: success_caste.php");
}
?>
