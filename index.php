

<!DOCTYPE html>
<html>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
    <meta name="google-signin-client_id" content="1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            var email = profile.getEmail();

            if (email.endsWith('@nitc.ac.in')) {
                var id_token = googleUser.getAuthResponse().id_token;
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'oauth_login.php');
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onload = function() {
                    if (xhr.responseText == 'success') {
                        window.location.href = 'landing.php';
                    } else {
                        alert('Login failed. Please try again.');
                    }
                };
                xhr.send('idtoken=' + id_token);
            } else {
                alert('You must use an @nitc.ac.in email address.');
                gapi.auth2.getAuthInstance().signOut();
            }
        }
    </script>
</head>

<body>
    <header>
        <img src="nitc.png" class="nitc-logo">
        <h2 class="heading">Voting Management System</h2>
        <h3 class="title">Login to Cast your vote</h3>
    </header>

    <!-- container div -->
    <div class="container">
        <div class="form-section">
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <div class="foot"> For any queries contact:<br>
                <a href="mailto:svms1416@gmail.com">svms1416@gmail.com</a>
            </div>
        </div>
    </div>
</body>

</html>
