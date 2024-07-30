<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="navstyles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <title>User Profile</title>
  <style>
    .container {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: stretch;
      padding: 23px 10px;
      border: 1px solid #6a36d23e;
      border-left: 7px solid #6476C3;
      border-radius: 20px;
      background-color: white;
      width: 60%;
      margin-left: 20%;
    }
  </style>

</head>

<body>
  <?php
  include('$include.lib');
  include('dbconfig.php');
  include('verifyadmin.php');

  $sql = "SELECT * FROM vms_student_information_2 WHERE vms_student_information_2.roll_number='$r_n'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);



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
  <div class="container">
    <div style="padding-left:50px;">
      <ul>
        <h1
          style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">
          Profile</h1>
        <div style="margin-bottom:15px;">
          <p> <span style="font-weight:bold; font-size:20px; margin-right:30px;">NAME:</span>
            <?php echo $row['name']; ?>
          </p>
        </div>
        <div style="margin-bottom:15px;">
          <p> <span style="font-weight:bold; font-size:20px; margin-right:30px;">Roll No:</span>
            <?php echo $row['roll_number']; ?>
          </p>
        </div>
        <div style="margin-bottom:15px;">
          <p> <span style="font-weight:bold; font-size:20px; margin-right:30px;">Email id:</span>
            <?php echo $row['email']; ?>
          </p>
        </div>
        <div style="margin-bottom:15px;">
          <p> <span style="font-weight:bold; font-size:20px; margin-right:30px;">Department:</span>
            <?php echo $row['department']; ?>
          </p>
        </div>


      </ul>
    </div>


  </div>
</body>
<script src="navbar.js"></script>

</html>