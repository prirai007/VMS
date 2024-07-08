<?php
    include('$include.lib');
    include('dbconfig.php');
    include('verifyuser.php');

    ?>
    <?php
    if(isset($_POST['save_opt'])){
    $boy_can=htmlspecialchars($_POST['Boy_Candidate']);
    $girl_can=htmlspecialchars($_POST['girl_Candidate']);
    $r_n = $_SESSION['roll_num'];
$sql = "SELECT * FROM voting_response WHERE roll_number = '$r_n' and  elections = 'CR Elections' ";
$query_run = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($query_run);

if ($rowCount <= 0) {
    $kquery = "INSERT INTO voting_response( roll_number, category, elections,candidate) Values( '$r_n','Boy Category', 'CR Elections', '$boy_can'),( '$r_n','Girl Category', 'CR Elections', '$girl_can'); " ;
    $kquery_run= mysqli_query($conn,$kquery);

    if($kquery_run){
        $_SESSION['status'] ="Inserted Succesfully";
        header("Location: success1.php");
        echo $_SESSION['status'];
      

        
    }
    else{
        $_SESSION['status'] =" Not Inserted Succesfully";
        header("Location: cast_voteCR_final.php");
        echo $_SESSION['status'];

    }
} else {
    header("Location: success_caste.php");
}
    
   
}


?>