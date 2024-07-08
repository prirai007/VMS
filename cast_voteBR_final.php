<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="bstyles.css">
    <link rel="stylesheet" href="landing-style.css">
    <link rel="stylesheet" href="navstyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>BR Cast Vote</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
</head>
<body>
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

    <?php
    include('$include.lib');
    include('dbconfig.php');
    include('verifyuser.php');

    $qsql = "SELECT * FROM candidate_database WHERE category = 'BR Category'";
    $result = mysqli_query($conn, $qsql);

    if ($result) {
        $aname = array();
        $manifesto = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($aname, $row['name']);
            array_push($manifesto, $row['pdf']);
        }
    }
    ?>

    <section>
        
        <h1 style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">BR Elections</h1>
        <form class="choice" method="post" action="act_cast_voteBR.php">
            <h2 style="padding-left:20%;padding-bottom: 0%;font-size: 30px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">BR Category</h2><br>
            <ul style="padding-left:20%;">
                <?php
                
                for ($i = 0; $i < count($aname); $i++) {
                    ?>
                    <li>
                        <cb>
                            <input type="radio" name="BR_Candidate" value="<?php echo $aname[$i] ?>" style="transform:scale(1.5);margin-right:5px;"  required="required" />
                            <c style="font-size:30px;"><?php echo $aname[$i] ?></c><br>
                        </cb>

                        <button class="button" style="border-radius: 10px; border-left: 50px;padding-right: 50px; padding-left: 50px; margin-left:500px;">
      <?php
     

      $sql="SELECT pdf from candidate_database where name = '$aname[$i]' ";
      $query=mysqli_query($conn,$sql);
      $info=mysqli_fetch_array($query)
        ?>
        <a href="pdf/<?php echo $info['pdf'] ; ?>"  style="color:white; font-size: 20px;">Manifesto</a>
                        </button><br>
                    </li>
                    <?php
                }
                ?>
            </ul>
            <button class="button" type="submit" name="save_opt" style="border-radius: 10px; border-left: 50px;padding-right: 50px; padding-left: 50px; margin-left:500px;"><b>Submit</b></button>
        </form>
    </section>

   
</body>
<script src="navbar.js"></script>
</html>
