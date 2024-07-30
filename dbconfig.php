<!-- 
    // $servername = "localhost";
    // $username = "u927048695_vms";
    // $password = "Mvsp3499@";
    // $dbname = "u927048695_vms";
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
 -->