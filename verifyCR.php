<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>
<?php
include('$include.lib');
include('dbconfig.php');
include('verifyuser.php');
$sql = "SELECT * FROM voting_response WHERE roll_number = '$r_n' and  elections = 'CR Elections' ";
$query_run = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($query_run);

if ($rowCount <= 0) {
    header("Location: cast_voteCR_final.php");
} else {
    header("Location: success_caste.php");
}


?>