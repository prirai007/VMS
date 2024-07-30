<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="navstyles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <title>Candidate Registration for BR</title>
  <style>
    li {
      display: block;
    }
  </style>
</head>

<body>
  <?php
  include('verifyadmin.php');
  // session_start();
  if (isset($_SESSION['error_message'])) {
    echo '<div style="color: red;margin-left:20%;">';
    foreach ($_SESSION['error_message'] as $error) {
      echo '<p>' . $error . '</p>';
    }
    echo '</div>';
    unset($_SESSION['error_message']);
  } elseif (isset($_SESSION['success_message'])) {
    echo '<div style="color: green;">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']);
  }
  ?>
  <nav>
    <div class="navbar" id="mySidebar1">
      <ul>
        <li>
          <a href="admin_landing.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
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
  </nav>
  <?php
  // session_start();
  if (isset($_SESSION['error_message'])) {
    // Wrap the error message in a span with a CSS class for styling
    echo '<span style="color: red;">' . $_SESSION['error_message'] . '</span>';
    unset($_SESSION['error_message']); // Clear the message so it won't be displayed again on refresh
  }

  ?>
  <div class="container" style="padding-left:20%;">
    <h1 style="padding-bottom: 2%;font-size: 50px;color:#1e4f81;">
      BR Candidates Registration</h1>
    <form class="choice" method="post" action="act_cand_regBR.php" enctype="multipart/form-data">
      <ul>
        <li>
          <label for="Elections" class="inp1">Name of Elections:</label>
          <select name="Elections" id="E1" style="border:1px solid black;border-radius:10px;margin-left:40px;">
            <option value="BR Elections">BR Elections</option>

          </select><br><br>
        </li>
        <li>
          <label for="categories" class="inp1">Name of Category:</label>
          <select name="Catogory" id="E2" style="border:1px solid black;border-radius:10px;margin-left:40px;">
            <option value="BR Category">BR Category</option>


          </select><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Name Of the candidate:</label>
          <input style="border:1px solid black;margin-left:10px;" type="text" id="C1" name="Name" value=""
            required="required" /><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Roll Number:</label>
          <input style="border:1px solid black;margin-left:85px;" type="text" id="C1" name="Roll_no" value=""
            required="required" /><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Email id:</label>
          <input style="border:1px solid black;margin-left:115px;" type="text" id="C1" name="Email_id" value=""
            required="required" /><br><br>
        </li>
        <li>

          <label for="Batch" class="inp1">Batch:</label>
          <select name="Batch" id="E2" style="border:1px solid black;border-radius:10px;margin-left:160px;">
            <option value="A">B21</option>
            <option value="B">B22</option>
            <option value="C">B23</option>
            <option value="D">B24</option>
          </select><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Department:</label>
          <input style="border:1px solid black;margin-left:90px;" type="text" id="C1" name="Department" value=""
            required="required" /><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Manifesto:</label>
          <input type="file" name="pdf" accept="application/pdf,application/vnd.ms-excel"
            style="border:1px solid black;border-radius:10px;margin-left:100px;" required="required" /><br><br>
        </li>
        <li>
          <label for="C1" class="inp1">Image:</label>
          <input type="file" name="upload_img" style="border:1px solid black;border-radius:10px;margin-left:125px;"
            required="required" /><br><br>
        </li>

      </ul>
      <button class="button" type="submit" name="save_opt"
        style="border-radius: 10px; border-left: 50px; align: center; padding-left: 50px; margin-left: 106px;margin-bottom:10px;">
        <b style="font-size:25px; padding-right:50px">Submit</b>
      </button>

    </form>
    <a href="update_form.php"><button class="button" type="submit" name="update"
        style="border-radius: 10px; border-left: 50px; align: center; padding-left: 50px; margin-left: 10px;">
        <b style="font-size:25px; padding-right:50px">Click here to modify</b>
      </button><a>


  </div>
  </section>

</body>
<script src="navbar.js"></script>

</html>