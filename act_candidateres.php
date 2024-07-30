<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
include('dbconfig.php');
$sql = "SELECT * FROM candidate_database";
$result = $conn->query($sql);

?>

