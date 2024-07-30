<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<?php
include('dbconfig.php');
$csql = "SELECT name FROM candidate_database";
$cresult = $conn->query($csql);
while($arr_name=$cresult->fetch_assoc()){
    $vsql="SELECT roll_number from voting_response where candidate='$arr_name' ";
    $vresult=$conn->query($vsql);
    $arr_roll=array();
    while($c_name=$vresult->fetch_assoc()){
        array_push($arr_roll,$c_name);
    }
    $num_votes=array_count_values($arr_roll);
    $nsql="UPDATE candidate_database set votes='$num_votes' where name='$arr_name';";
    $nresult=$conn->query($nsql);
};
?>
