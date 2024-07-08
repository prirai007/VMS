<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="navstyles.css">
  <title>Voting Response</title>
 
  <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
        h2{
    color: #1e4f81;
    font-size: 40px;
    position: relative;
    top:-55px;
    padding-left:150px;
        }
 
        td {
            
            border: 1px solid black;
        }
 
        th,
        td {
            background-color: white;
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link rel="stylesheet" href="alanding-style.css">

</head>
<body>

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
<form action="">
  <input value='Print' type='button' onclick='handlePrint()' style="color:white;float:right;margin:10px 100px; padding:10px 20px;border-radius:10px;background-color:#1e4f81" />
  <script type="text/javascript">
    const handlePrint = () => {
      var actContents = document.body.innerHTML;
      document.body.innerHTML = actContents;
      window.print();
    }
  </script>
</form>
<div class="list" style="padding-left:20%">
<?php 

include('$include.lib');
include('dbconfig.php');
include('verifyadmin.php');
$sql = "SELECT * FROM voting_response";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
?>
<h2>Voting Response</h2>
<table class='test'>
  <tr>
    <th>Roll NO</th>
    <th>Category</th>
    <th>Elections</th>
    <th>Candidate Voted</th>
    <th>Time stamp</th>
    
  </tr>
  <?php
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
    
    <tr>
     <td><?php echo $row["roll_number"]; ?></td>
     <td><?php echo $row["category"]?></td>
     <td><?php echo $row["elections"]?> </td>
     <td><?php echo $row["candidate"]?> </td>
<td><?php echo $row["t_stamp"]?> </td>
     
    </tr>
  <?php
  }}
  else {
    echo "0 results";
  }
  $conn->close();
  ?>
</table>
</div>

<a href="dis_adminresults.php"><button   class="sub_but" name="update" style="background-color: #1e4f81; color: white; margin-left:20%; border-radius: 10px; border-left: 50px;"><b style="font-size:20px; padding-right:50px; padding-left:50px;">BACK</b></button></a>
  
</body>
<script src="navbar.js"></script>
</html>
