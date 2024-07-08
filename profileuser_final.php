
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="landing-style.css">
    <link rel="stylesheet" href="navstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <title>User Profile</title>
  <style>
    .container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: inline;
    padding: 23px 10px;
    border: 1px solid #6a36d23e;
    border-left: 7px solid #6476C3;
    border-radius: 20px;
    background-color: white;
    width: 60%;
    margin-left:20%;
    
    }
    @media screen and (max-width: 800px) {
  /* Hide navbar 1 (for laptops) on smartphones */
 .proff{
  padding-left:5px;

 }
  .container{
    width:80%;
    align-items: start;
  }
}
  </style>

</head>
<body>
<?php
include('$include.lib');
include('dbconfig.php');
include('verifyuser.php');


$sql = "SELECT * FROM vms_student_information_2 WHERE vms_student_information_2.roll_number='$r_n'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
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
            <span>×</span>
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
  <div class="container">
    
    <div style="padding-left:50px;" class="proff">
    <ul>
    <p style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">Profile</p>   
     <div class="prof" style="margin-bottom:15px;"> <p>  <span style="font-weight:bold; font-size:20px; margin-right:30px;">NAME:</span> <?php echo $row['name'];?></p></div>
     <div class="prof" style="margin-bottom:15px;"> <p>  <span style="font-weight:bold; font-size:20px; margin-right:30px;">Roll No:</span> <?php echo $row['roll_number'];?></p></div>
     <div class="prof" style="margin-bottom:15px;"> <p>  <span style="font-weight:bold; font-size:20px; margin-right:10px;">Email id:</span> <?php echo $row['email'];?></p></div>
     <div class="prof" style="margin-bottom:15px;"> <p>  <span style="font-weight:bold; font-size:20px; margin-right:30px;">Batch:</span> <?php echo $row['batch'];?></p></div>
     <div class="prof" style="margin-bottom:15px;"> <p>  <span style="font-weight:bold; font-size:20px; margin-right:30px;">Department:</span> <?php echo $row['department'];?></p></div>
    

    </ul>
    </div>
    
    
           
    
  </div>
  <script src="navbar.js"></script>
</body>
</html>
