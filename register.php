<?php
header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");
?>

<?php
session_start();
require_once 'database_connection.php'; // Update with your database connection script

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    $roll_no = $_POST['roll_no'];

    // Validate and sanitize input
    $register_email = filter_var($register_email, FILTER_SANITIZE_EMAIL);
    $register_password = filter_var($register_password, FILTER_SANITIZE_STRING);
    $roll_no = filter_var($roll_no, FILTER_SANITIZE_STRING);

    // Check if user already exists
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
    $stmt->bindParam(':email', $register_email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        echo 'User with this email already exists.';
    } else {
        // Hash the password
        $hashed_password = password_hash($register_password, PASSWORD_BCRYPT);

        // Insert new user into the database
        $stmt = $pdo->prepare('INSERT INTO users (email, password, roll_no) VALUES (:email, :password, :roll_no)');
        $stmt->bindParam(':email', $register_email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':roll_no', $roll_no);

        if ($stmt->execute()) {
            echo 'Registration successful. You can now <a href="login.php">login</a>.';
        } else {
            echo 'Registration failed. Please try again.';
        }
    }
}
?>
