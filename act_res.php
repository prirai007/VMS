//for the result page
<?php
include('$include.lib');
include('dbconfig.php');
include('verifyuser.php');
$csql = "SELECT name FROM candidate_database";
$cresult = $conn->query($csql);

while ($arr_name = $cresult->fetch_assoc()) {
  $candidate_name = $arr_name['name'];

  $vsql = "SELECT COUNT(roll_number) AS vote_count FROM voting_response WHERE candidate=?";
  $vstmt = $conn->prepare($vsql);
  $vstmt->bind_param("s", $candidate_name);
  $vstmt->execute();
  $vresult = $vstmt->get_result();

  // Fetch the vote count directly from the query result
  $vote_data = $vresult->fetch_assoc();
  $num_votes = $vote_data['vote_count'];

  $nsql = "UPDATE candidate_database SET votes=? WHERE name=?";
  $nstmt = $conn->prepare($nsql);
  $nstmt->bind_param("is", $num_votes, $candidate_name);
  $nstmt->execute();
}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['update'])) {
    $cat = $_POST['category'];
    $bat = $_POST['Batch'];

    if ($cat != 'BR Category' && $bat != 'Null') {
      $sql = "SELECT * FROM candidate_database WHERE category = '$cat' AND batch = '$bat'";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        $name = array();
        $votes = array();
        $image = array();
        $batc = array();
        while ($row = mysqli_fetch_assoc($result)) {
          array_push($name, $row['name']);
          array_push($votes, $row['votes']);
          array_push($image, $row['image']);
          array_push($batc, $row['batch']);


        }
        $max_votes = max($votes);
        $max_votes_key = array_search($max_votes, $votes);
        unset($votes[$max_votes_key]);
        $max2 = max($votes);
        $max2_key = array_search($max2, $votes);

        $winner = $name[$max_votes_key];
        $runner = $name[$max2_key];
        $bat1 = $batc[$max_votes_key];
        $bat2 = $batc[$max2_key];
        $winner_image1 = $image[$max_votes_key];
        $winner_image2 = $image[$max2_key];



        ?>
        <!DOCTYPE html>
        <html>

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Results</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
          <link rel="stylesheet" href="main.css">
          <link rel="stylesheet" href="landing-style.css">
          <link rel="stylesheet" href="navstyles.css">
          <style media="screen">
            embed {
              border: 2px solid black;
              margin-top: 30px;
            }

            .div1 {
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
    <header>
            <h1>Election Statistics</h1>
          </header>
          <section class="container">
            <h3>Election Results</h3>
            <div class="card">
              <div class="box">
                <h5>
                  <img src="uploads/<?php echo isset($winner_image1) ? $winner_image1 : ''; ?>"
                     alt="">

                </h5>
                <h3>
                  <?php echo isset($cat) ? $cat : ''; ?>
                </h3>
                <h3>
                  <?php echo isset($winner) ? $winner : ''; ?>
                </h3>
                <h3>Batch:
                  <?php echo isset($bat1) ? $bat1 : ''; ?>
                </h3>
                <h3>Total Votes:
                  <?php echo isset($max_votes) ? $max_votes : ''; ?>
                </h3>
                <h3><?php 
                    if ($max_votes==$max2){
                    echo 'Tied !';}
                    else{
                    echo 'Winner';}?></h3>
              </div>
              <div class="box">
                <h5>
                  <img src="uploads/<?php echo isset($winner_image2) ? $winner_image2 : ''; ?>"
                     alt="">

                </h5>
                <h3>
                  <?php echo isset($cat) ? $cat : ''; ?>
                </h3>
                <h3>
                  <?php echo isset($runner) ? $runner : ''; ?>
                </h3>
                <h3>Batch:
                  <?php echo isset($bat2) ? $bat2 : ''; ?>
                </h3>
                <h3>Total Votes:
                  <?php echo isset($max2) ? $max2 : ''; ?>
                </h3>
                <h3>
                    <?php 
                    if ($max_votes==$max2){
                    echo 'Tied !';}
                    else{
                    echo 'Runner Up';}?></h3>
              </div>
            </div>
          </section>
          <a href="results_voter_final_form.php"><button class="sub_but" name="update"
              style="background-color: #1e4f81; color: white; margin-left:20%; border-radius: 10px; border-left: 50px;"><b
                style="font-size:20px; padding-right:50px; padding-left:50px;">BACK</b></button></a>
        </body>
        <script src="navbar.js"></script>

        </html>
        <?php
      } else {
        echo "Error fetching data from the database.";
      }
    } elseif ($cat == 'BR Category' && $bat == 'Null') {
      $sql = "SELECT * FROM candidate_database WHERE category = '$cat'";
      $result = mysqli_query($conn, $sql);


      if ($result) {
        $name = array();
        $votes = array();
        $batc = array();
        $image = array();
        while ($row = mysqli_fetch_assoc($result)) {
          array_push($name, $row['name']);
          array_push($votes, $row['votes']);
          array_push($batc, $row['batch']);
          array_push($image, $row['image']);
        }


        $max_votes = max($votes);
        $max_votes_key = array_search($max_votes, $votes);
        unset($votes[$max_votes_key]);
        $max2 = max($votes);
        $max2_key = array_search($max2, $votes);

        $winner = $name[$max_votes_key];
        $runner = $name[$max2_key];
        $bat1 = $batc[$max_votes_key];
        $bat2 = $batc[$max2_key];
        $winner_image1 = $image[$max_votes_key];
        $winner_image2 = $image[$max2_key];

        //2
        // $imageData1=image_con($winner);
        // $imageData2=image_con($runner);


        ?>
        <!DOCTYPE html>
        <html>

        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Results</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
          <link rel="stylesheet" href="main.css">
          <link rel="stylesheet" href="landing-style.css">
          <link rel="stylesheet" href="navstyles.css">
          <style media="screen">
            embed {
              border: 2px solid black;
              margin-top: 30px;
            }

            .div1 {
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
          <header>
            <h1>Election Statistics</h1>
          </header>
          <section class="container">
            <h3>Election Results</h3>
            <div class="card">
              <div class="box">
                <h5>
                  <img src="uploads/<?php echo isset($winner_image1) ? $winner_image1 : ''; ?>"
                    alt="">

                </h5>
                <h3>
                  <?php echo isset($cat) ? $cat : ''; ?>
                </h3>
                <h3>
                  <?php echo isset($winner) ? $winner : ''; ?>
                </h3>
                <h3>Batch:
                  <?php echo isset($bat1) ? $bat1 : ''; ?>
                </h3>
                <h3>Total Votes:
                  <?php echo isset($max_votes) ? $max_votes : ''; ?>
                </h3>
                <h3> <?php 
                    if ($max_votes==$max2){
                    echo 'Tied !';}
                    else{
                    echo 'winner';}?></h3>
              </div>
              <div class="box">
                <h5>
                  <img src="uploads/<?php echo isset($winner_image2) ? $winner_image2 : ''; ?>"
                     alt="">

                </h5>
                <h3>
                  <?php echo isset($cat) ? $cat : ''; ?>
                </h3>
                <h3>
                  <?php echo isset($runner) ? $runner : ''; ?>
                </h3>
                <h3>Batch:
                  <?php echo isset($bat2) ? $bat2 : ''; ?>
                </h3>
                <h3>Total Votes:
                  <?php echo isset($max2) ? $max2 : ''; ?>
                </h3>
                <h3> <?php 
                    if ($max_votes==$max2){
                    echo 'Tied !';}
                    else{
                    echo 'Runner Up';}?></h3>
              </div>
            </div>
          </section>
          <a href="results_voter_final_form.php"><button class="sub_but" name="update"
              style="background-color: #1e4f81; color: white; margin-left:20%; border-radius: 10px; border-left: 50px;"><b
                style="font-size:20px; padding-right:50px; padding-left:50px;">BACK</b></button></a>
        </body>
        <script src="navbar.js"></script>

        </html>
        <?php
      } else {
        session_start();
                    $_SESSION['error_message'] = "Error fetching data from the database.";
                    header("Location: results_voter_final_form.php");
                    exit;
       
      }

    } else {
      session_start();
                    $_SESSION['error_message'] = "Please select a valid category and batch.";
                    header("Location: results_voter_final_form.php");
                    exit;
      
    }
  } else {
    session_start();
                    $_SESSION['error_message'] = "Invalid form data.";
                    header("Location: results_voter_final_form.php");
                    exit;
    
  }
} else {
  session_start();
                    $_SESSION['error_message'] = "Form not submitted.";
                    header("Location: results_voter_final_form.php");
                    exit;
  
}
?>