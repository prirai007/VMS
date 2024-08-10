<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
include('dbconfig.php');
include('verifyadmin.php');

$errors = array();

if (isset($_POST['save_opt'])) {
  $Elections = $_POST['Elections'];
  $Category = $_POST['Category'];
  $Name = $_POST['Name'];
  $Roll_no = $_POST['Roll_no'];
  $Email_id = $_POST['Email_id'];
  $Batch = $_POST['Batch'];
  $dept = $_POST['Department'];
//  $branch = $_POST['Branch'];
  $pdf = $_FILES['pdf']['name'];
  $Image = $_FILES["upload_img"]["name"];

  if (!filter_var($Email_id, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "*Email is not valid");
  }
  if (!preg_match('/^[A-Z]+$/', $dept)) {
    $errors[] = "Please enter department only in capital letters.";
  }
  if (!preg_match('/^[A-Z0-9]+$/', $Roll_no)) {
    $errors[] = "Please enter Roll no only in capital letters (excluding numbers).";
  }

  if (count($errors) > 0) {
    $_SESSION['error_message'] = $errors;
    header("Location: cand_regBR_final.php");
    exit;
  } else {
    $pdf_tmp_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "pdf/" . $pdf;
    move_uploaded_file($pdf_tmp_loc, $pdf_store);

    $tempfile = $_FILES["upload_img"]["tmp_name"];
    $folder = "uploads/" . $Image;
    move_uploaded_file($tempfile, $folder);

    $stmt = $conn->prepare("INSERT INTO candidate_database (roll_number, name, email, batch, department, elections, category, pdf, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
      die("Error in SQL query: " . $conn->error);
    } else {
      $stmt->bind_param("sssssssss", $Roll_no, $Name, $Email_id, $Batch, $dept, $Elections, $Category, $pdf, $Image);
      $result = $stmt->execute();
      if ($result) {
        $_SESSION['success_message'] = "Registered successfully.";
        header("Location: cand_regBR_final.php");
        exit;
      } else {
        array_push($errors, "Registration failed.");
        $_SESSION['error_message'] = $errors;
        header("Location: cand_regBR_final.php");
        exit;
      }
      $stmt->close();
    }
  }
}
?>
