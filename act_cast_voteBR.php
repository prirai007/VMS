<?php
    include('$include.lib');
    include('dbconfig.php');
    include('verifyuser.php');


    if (isset($_POST['save_opt'])) {
        $BR_can = htmlspecialchars($_POST['BR_Candidate']);
        $r_n = $_SESSION['roll_num'];
        $sql = "SELECT * FROM voting_response WHERE roll_number = '$r_n' AND elections = 'BR Elections'";
        $bquery_run = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($bquery_run);
        if ($rowCount <= 0) {
            $query = "INSERT INTO voting_response(roll_number, category, elections, candidate) VALUES ('$r_n', 'BR Category', 'BR Elections', '$BR_can') ";
            $query_run = mysqli_query($conn, $query);

            if ($query_run) {
                $_SESSION['status'] = "Voting completed";
                header("Location: success1.php");
                echo $_SESSION['status'];
                

            } else {
                $_SESSION['status'] = "Submit again";
                header("Location: cast_voteBR_final.php");
                echo $_SESSION['status'];
            }
        } else {
            header("Location: success_caste.php");
        }
    }
    ?>