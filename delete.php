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
$sql="select *from candidate_database where roll_number ='$roll_no1'";

$result1 = mysqli_query($conn, $sql);
$candidate_data=$result1->fetch_assoc();
// Check if the form is submitted
if (isset($_POST['update'])) {
    // Fetch the form data
    $Name = $_POST['Name'];
    $Email_id = $_POST['Email_id'];
    $pdf = $_FILES['pdf']['name'];
    $Image = $_FILES["upload_img"]["name"];

    $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "pdf/" . $pdf;

    move_uploaded_file($pdf_tem_loc, $pdf_store);

    $tempfile = $_FILES["upload_img"]["tmp_name"];
    $folder = "uploads/" . $Image;

    move_uploaded_file($tempfile, $folder);

    // Check if the required parameters are provided in the session
    if (isset($_SESSION['cat'], $_SESSION['bat'], $_SESSION['roll_num_r'])) {
        $cat1 = $_SESSION['cat'];
        $bat1 = $_SESSION['bat'];
        $roll_no1 = $_SESSION['roll_num_r'];

        // Update the candidate's name in the database
        $stmt = $conn->prepare("UPDATE candidate_database SET name=?, email=?, pdf=?, image=? WHERE roll_number=?");
        $stmt->bind_param("sssss", $Name, $Email_id, $pdf, $Image, $roll_no1);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success_message'] = "Candidate information updated successfully!";
        } else {
            $_SESSION['error_message'] = "Failed to update candidate information";
        }

        $stmt->close();
    }

    // Redirect to the current page to avoid resubmitting the form on refresh
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Candidate</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
    // Display success or error messages if set
    if (isset($_SESSION['success_message'])) {
        echo '<p style="color: green;">' . $_SESSION['success_message'] . '</p>';
        unset($_SESSION['success_message']);
    } elseif (isset($_SESSION['error_message'])) {
        echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
        unset($_SESSION['error_message']);
    }
    ?>
    <nav>
      <div id="mySidebar" class="navbar">
        <ul>
          <li>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
              >
              <span>×</span>
          </li>
          <li>
            <a href="admin_landing.php">
                <i class="fas fa-home"></i> <span class="nav-item">Home</span>
            </a>
          </li>
          <li>
            <a href="profileadmin_final.php">
              <i class="fas fa-user"></i>
              <span class="nav-item">Profile</span>
            </a>
          </li>
          <li>
                    <a href="users.php" class="users">
                        <i class="fas fa-address-card"></i>
                        <span class="nav-item">users</span>
                    </a>
            </li>
          <li>
            <a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </div>
      <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>
      </div>
    </nav>
    <form method="post" style="margin-left:20%;">
        
        <h1 style="margin-bottom:3%;">Edit Candidate Information</h1>
    <ul>
            
                <li>
                  <label for="Elections" class="inp1" >Name of Elections:</label>
                  <select name="Elections" id="E1" style="border:1px solid black;border-radius:10px;margin-left:40px;" disabled>
                      <option value=" <?php echo $candidate_data['elections']; ?>"><?php echo $candidate_data['elections']; ?></option>
                      
                  </select><br><br>
                </li>
                <li>
                  <label for="categories" class="inp1" >Name of Category:</label>
                  <select name="Catogory" id="E2" style="border:1px solid black;border-radius:10px;margin-left:40px;" disabled>
                      <option  value="<?php echo $candidate_data['name']; ?>"> <?php echo $candidate_data['category']; ?></option>
                      
                      
                  </select><br><br>
                </li>
                <li>
                  <label for="C1" class="inp1" >Name Of the candidate:</label>
                  <input style="border:1px solid black;margin-left:10px;" type="text" id="C1" name="Name" value="<?php echo $candidate_data['name']; ?>" required="required" /><br><br>
                </li>
                <li>
                  <label for="C1" class="inp1" >Roll Number:</label>
                  <input style="border:1px solid black;margin-left:85px;" type="text" id="C1" name="Roll_no" value="<?php echo $candidate_data['roll_number']; ?>" disabled required="required" /><br><br>
                </li> 
                <li> 
                  <label for="C1" class="inp1" >Email id:</label>
                  <input style="border:1px solid black;margin-left:115px;" type="text" id="C1" name="Email_id" value="<?php echo $candidate_data['email']; ?>" required="required" /><br><br>
                </li>
                <li> 
                  
                  <label for="Batch" class="inp1" >Batch:</label>
                  <select name="Batch" id="E2" style="border:1px solid black;border-radius:10px;margin-left:160px;"  value="<?php echo $candidate_data['batch']; ?>" disabled>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                  </select><br><br>
                </li>
                <li>
                  <label for="C1" class="inp1" >Department:</label>
                  <input style="border:1px solid black;margin-left:90px;" type="text" id="C1" name="Department" value="<?php echo $candidate_data['department']; ?>" disabled required="required" /><br><br>
                </li>
                <li>
                  <label for="C1" class="inp1" >Manifesto:</label>
                  <input type="file" name="pdf" accept="application/pdf,application/vnd.ms-excel" style="border:1px solid black;border-radius:10px;margin-left:100px;"  required="required" /><br><br>
                </li>
                <li>
                  <label for="C1" class="inp1" >Image:</label>
                  <input type="file" name="upload_img" style="border:1px solid black;border-radius:10px;margin-left:125px;" required="required" /><br><br>
                </li>

       <button class="sub_but" type="submit" name="update" style="border-radius: 10px; border-left: 50px; align: center; padding-left: 50px; margin-left: 106px;">
                <b style="font-size:25px; padding-right:50px">Submit</b>
    </form>
    <a href="update_form.php">
        <button   class="sub_but"  style="background-color: #1e4f81; color: white; margin-left:1%; border-radius: 10px; border-left: 50px;font-size:20px; padding-right:50px; padding-left:50px;">BACK</button></a>
</body>
<script src="navbar.js"></script>
</html>
