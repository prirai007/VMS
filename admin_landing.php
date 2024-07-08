<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NITC-VMS-ADMIN</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="alanding-style.css">
  <link rel="stylesheet" href="navstyles.css">
</head>
<body>
  <?php
  include('verifyadmin.php');
  if (isset($_SESSION['error_message'])) {
    echo '<div style="color: red; margin-left: 20%;">';
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
            <span class="nav-item">Users</span>
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
  <header id="main">
    <h1>Admin Landing Page</h1>
  </header>
  <div class="container">
    <div class="curr">
      <h3>Register For</h3>
      <a href="cand_regCR_final.php"><button class="button" type="button">CR Elections</button></a>
      <a href="cand_regBR_final.php"><button class="button" type="button">BR Elections</button></a>
    </div>
    <div class="curr">
      <h3>Past Elections</h3>
      <a href="dis_adminresults.php"><button class="button" type="button">Results</button></a>
    </div>
  </div>
  <script src="navbar.js"></script>
</body>
</html>
