<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
// Start a session
session_start();

// Include the database configuration
include('dbconfig.php');
$cat1 = $_SESSION['cat'];
$bat1 = $_SESSION['bat'];
$roll_no1 = $_SESSION['roll_num_r'];
$sql="DELETE from candidate_database where roll_number ='$roll_no1'";

$result1 = mysqli_query($conn, $sql);

        if ($result1) {
            $_SESSION['success_message'] = "Deleted Successfully! You can register again..";
            header("Location: admin_landing.php");
        } else {
            $_SESSION['error_message'] = "Failed to update candidate information";
             header("Location:fetch_cand.php");
        }
    // Redirect to the current page to avoid resubmitting the form on refresh
    


?>
