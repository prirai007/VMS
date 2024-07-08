<?php
    // $servername = "localhost";
    // $username = "u927048695_vms";
    // $password = "Mvsp3499@";
    // $dbname = "u927048695_vms";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
   die("Something went wrong;");
}
?>