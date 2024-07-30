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
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">

    <title>Exit page</title>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function revokeToken() {
            // Revoke token
            var auth2;
            gapi.load('auth2', function() {
                auth2 = gapi.auth2.init({
                    client_id: '1082461038924-h9bjeg6n5g7c78ldlfnq13r2j6dcvjbp.apps.googleusercontent.com'
                });
                auth2.signOut().then(function () {
                    auth2.disconnect();
                });
            });
        }

        window.onload = function() {
            revokeToken();
        };
    </script>
</head>
<body>
    <section style="padding-top:200px;">
        <h1 style="padding-left: 20%;padding-bottom: 2%;font-size: 50px;color:#1e4f81;font-family: 'Nunito Sans', sans-serif;">You are successfully logged out.</h1>
    </section>
    <a href="index.php" style="margin-left: 20%;color:#1e4f81;">Back to Login Page</a>
</body>
</html>
