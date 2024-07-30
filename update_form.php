<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="navstyles.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    include('$include.lib');
    include('dbconfig.php');
    //include('verifyadmin.php');

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
    <header>

        <h1>Deletion Page</h1>
<form class="choice" method="post" action="fetch_cand.php">
        
                
        <label for="category" style="font-size: 25px; padding-left: 320px;">Name of Category:</label>
        <select name="category" id="category" style="border:1px solid black;border-radius:10px; " >
            
            <option value="Boy Category">Boy Category</option>
            <option value="Girl Category">Girl Category</option>
            <option value="BR Category">BR Category</option>
        </select><br>
        <label for="batch" id="batchLabel" style="font-size: 25px; padding-left: 320px;">Batch:</label>
        <select name="Batch" id="Batch" style="border:1px solid black;border-radius:10px;margin-left:160px;padding-right:50px;" >
            
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select><br>
        <label for="roll number" style="font-size: 25px; padding-left: 320px;" >Roll Number:</label>
        <input style="border:1px solid black;margin-left:85px;" type="text" id="C1" name="Roll_no" value="" placeholder="Enter in Capitals Excluding numbers" required="required" /><br><br>
        
        <button class="sub_but" type="submit" name="update" style="background-color: #1e4f81; color: white; margin-left:25%; border-radius: 10px; border-left: 50px;"><b style="font-size:20px; padding-right:50px; padding-left:50px;">Submit</b></button>
</form>
<?php
    
    session_start();
    if (isset($_SESSION['error_message'])) {
        echo '<span style="color: red;">' . $_SESSION['error_message'] . '</span>';
            unset($_SESSION['error_message']);
    } 
    elseif (isset($_SESSION['success_message'])) {
      echo '<div style="color: green;">' . $_SESSION['success_message'] . '</div>';
      unset($_SESSION['success_message']);
  }
    ?>

    </header>
</body>
<script src="navbar.js"></script>
</html>
