<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITC-VMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="alanding-style.css">
    <link rel="stylesheet" href="navstyles.css">
</head>
<body>
    <?php
    include('verifyadmin.php');
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
    <header id="main">
        <h1>Election Results</h1>
    </header>
    <div class="container">
        <div class="curr">
            <a href="dis_candidates_results.php"><button class="button" type="button">Candidates Results</button></a>
            <a href="dis_votingresponse.php"><button class="button" type="button">Voting Response</button></a>
            
        </div>
        
        
    </div>
</body>
<!--<script src="navbar.js"></script>-->
</html>