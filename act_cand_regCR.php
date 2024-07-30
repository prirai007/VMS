
<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
session_start();
include('dbconfig.php');
include('$include.lib');
//include('verifyadmin.php');
$errors = array();

if (isset($_POST['save_opt'])) {
  $Elections = $_POST['Elections'];
  $Catogory = $_POST['Catogory'];
  $Name = $_POST['Name'];
  $Roll_no = $_POST['Roll_no'];
  $Email_id = $_POST['Email_id'];
  $Batch = $_POST['Batch'];
  $dept = $_POST['Department'];
  $pdf=$_FILES['pdf']['name'];
  $Image = $_FILES["upload_img"]["name"];
  
  
  if (!filter_var($Email_id, FILTER_VALIDATE_EMAIL)) {
   array_push($errors, "*Email is not valid");
  }
  if(!isValidOrganizationalEmail($Email_id)){
    array_push($errors,"Enter Institute Mail id!");
}
  if (!preg_match('/^[A-Z]+$/',$dept )) {
    $errors[] = "Please enter department only in capital letters.";
 }
  if (!preg_match('/^[A-Z0-9]+$/',$Roll_no )) {
   $errors[] = "Please enter Roll no only capital letters (excluding numbers).";
}

  if (count($errors) > 0) {
    // If there are errors, store them in the session and show on the same page
    $_SESSION['error_message'] = $errors;
    header("Location: cand_regCR_final.php");
    exit;
} else {
  $pdf=$_FILES['pdf']['name'];
  $pdf_type=$_FILES['pdf']['type'];
  $pdf_size=$_FILES['pdf']['size'];
  $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
  $pdf_store="pdf/".$pdf;

  move_uploaded_file($pdf_tem_loc,$pdf_store);

  $tempfile = $_FILES["upload_img"]["tmp_name"];
  $folder = "uploads/". $Image;

  
  move_uploaded_file($tempfile, $folder);
        
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO candidate_database (roll_number, name, email, batch, department, elections, category, pdf, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $Roll_no, $Name, $Email_id, $Batch, $dept, $Elections, $Catogory, $pdf, $Image);
    $result = $stmt->execute();
    if ($result) {
      $_SESSION['success_message'] = "Registered successfully.";
      header("Location: cand_regCR_final.php"); // Redirect to the form page to display the success message
      exit;
    } else {
      array_push($errors, "Registration failed.");
      $_SESSION['error_message'] = $errors;
      header("Location: cand_regCR_final.php"); // Redirect to the form page to display the error message
      exit;
    }

    $stmt->close();
  }
} 
 ?>
