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
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function handleCredentialResponse(response) {
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'oauth2callback.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.responseText === 'user') {
                    window.location.href = 'landing.php';
                } else if (xhr.responseText === 'admin') {
                    window.location.href = 'admin_landing.php';
                } else {
                    alert('Login failed. Please try again.');
                }
            };
            xhr.send('credential=' + response.credential);
        }

        window.onload = function() {
            google.accounts.id.initialize({
                client_id: '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com',
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.getElementById('buttonDiv'),
                { theme: 'outline', size: 'large' }
            );
            google.accounts.id.prompt();
        };
    </script>
</head>

<body>
    <header>
        <img src="nitc.png" class="nitc-logo">
        <h2 class="heading">Voting Management System</h2>
        <h3 class="title">Login to Cast your vote</h3>
    </header>

    <div class="container">
        <div class="form-section">
            <div id="buttonDiv"></div>
            <div class="foot"> For any queries contact:<br>
                <a href="mailto:svms1416@gmail.com">svms1416@gmail.com</a>
            </div>
        </div>
    </div>
</body>

</html>
