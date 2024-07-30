<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NITC-VMS-USER</title>
  <link rel="stylesheet" href="landing-style.css">
  <link rel="stylesheet" href="navstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
  <?php
  include('verifyuser.php');
  ?>

  <nav>
    <div class="navbar" id="mySidebar1">
      <ul>
        <li>
          <a href="landing.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="profileuser_final.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Profile</span>
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
  <nav>
    <div id="mySidebar" class="navbar">
      <ul>
        <li>
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <span>x</span>
        </li>
        <li>
          <a href="landing.php">
            <i class="fas fa-home"></i> <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="profileuser_final.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Profile</span>
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
    <div id="main1">
      <button class="openbtn" onclick="openNav()">☰</button>
    </div>
  </nav>

  <div>
    <header id="main">
      <h1>Student Landing Page</h1>
    </header>
  </div>
  <div class="container">
    <div class="curr">
      <h3>Vote For</h3>
      <a href="verifyCR.php"><button class="button" type="button">CR Elections</button></a>
      <a href="verifyBR.php"><button class="button" type="button">BR Elections</button></a>

    </div>
    <div class="curr">
      <h3>Results</h3>
      <a href="results_voter_final_form.php"><button class="button" type="button">Results</button></a>

    </div>

  </div>
  <script src="navbar.js"></script>
</body>

</html>
