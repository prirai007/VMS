<?php
include('dbconfig.php');
session_start();
$r_n=$_SESSION['roll_num'];
$vsql="INSERT into login_details(roll_number,status) values('$r_n','Log Out Successfull');";
$res=mysqli_query($conn,$vsql);
// Clear the session data
session_unset();
session_destroy();

// Redirect to the login page
header("Location: success_exit.php");
exit();
?>