<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
session_start();

include('verifyuser.php');
?>

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
        .container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-items: center;
            padding: 23px 10px;
            border: 1px solid #6a36d23e;
            border-left: 7px solid #6476C3;
            border-radius: 20px;
            background-color: white;
            width: 60%;
            margin: auto;
        }
        @media screen and (max-width: 800px) {
            .container {
                width: 80%;
                align-items: start;
            }
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
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                </li>
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
        <div id="main1">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
    </nav>
    <div class="container">
        <h1 style="padding-bottom: 20px; font-size: 50px; color: #1e4f81; font-family: 'Nunito Sans', sans-serif;">Profile</h1>
        <div class="prof" style="margin-bottom: 15px;">
            <p><span style="font-weight: bold; font-size: 20px; margin-right: 30px;">Name:</span> <?php echo htmlspecialchars($name); ?></p>
        </div>
        <div class="prof" style="margin-bottom: 15px;">
            <p><span style="font-weight: bold; font-size: 20px; margin-right: 30px;">Roll No:</span> <?php echo htmlspecialchars($roll_num); ?></p>
        </div>
        <div class="prof" style="margin-bottom: 15px;">
            <p><span style="font-weight: bold; font-size: 20px; margin-right: 10px;">Email ID:</span> <?php echo htmlspecialchars($email); ?></p>
        </div>
        <div class="prof" style="margin-bottom: 15px;">
            <p><span style="font-weight: bold; font-size: 20px; margin-right: 30px;">Batch:</span> <?php echo htmlspecialchars($batch); ?></p>
        </div>
        <div class="prof" style="margin-bottom: 15px;">
            <p><span style="font-weight: bold; font-size: 20px; margin-right: 30px;">Department:</span> <?php echo htmlspecialchars($department); ?></p>
        </div>
    </div>
    <script src="navbar.js"></script>
</body>
</html>
