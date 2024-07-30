<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

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
</head>
<body>
<nav>
    <div class="navbar" id="mySidebar1">
        <ul>
            <li><a href="landing.php"><i class="fas fa-home"></i> <span class="nav-item">Home</span></a></li>
            <li><a href="profileuser_final.php"><i class="fas fa-user"></i> <span class="nav-item">Profile</span></a></li>
            <li><a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> <span class="nav-item">Log out</span></a></li>
        </ul>
    </div>
</nav>

<?php
include('dbconfig.php');
include('verifyuser.php');

$r_n = $_SESSION['roll_num'];
$batch = $_SESSION['batch']; // Assuming batch and branch are stored in the session
$branch = $_SESSION['branch'];

$qsql = "SELECT * FROM candidate_database WHERE category = 'BR Category' AND batch = '$batch' AND branch = '$branch'";
$result = mysqli_query($conn, $qsql);

if ($result) {
    $aname = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $aname[] = $row['name'];
    }
}
?>

<section>
    <h1 style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">BR Elections</h1>
    <form class="choice" method="post" action="act_cast_voteBR.php">
        <h2 style="padding-left:20%;padding-bottom: 0%;font-size: 30px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">BR Category</h2><br>
        <ul style="padding-left:20%;">
            <?php foreach ($aname as $name) { ?>
                <li>
                    <input type="radio" name="BR_Candidate" value="<?php echo $name ?>" style="transform:scale(1.5);margin-right:5px;" required="required" />
                    <span style="font-size:30px;"><?php echo $name ?></span><br>
                </li>
            <?php } ?>
        </ul>
        <button class="button" type="submit" name="save_opt" style="border-radius: 10px; border-left: 50px;padding-right: 50px; padding-left: 50px; margin-left:500px;"><b>Submit</b></button>
    </form>
</section>
</body>
<script src="navbar.js"></script>
</html>
