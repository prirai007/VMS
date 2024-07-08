<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="landing-style.css">
    <script src="navbar.js"></script>

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
      <div id="mySidebar" class="navbar">
        <ul>
          <li>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
              >
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
    
    
    </body>