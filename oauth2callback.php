<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

header("Cross-Origin-Opener-Policy: same-origin");
header("Cross-Origin-Embedder-Policy: require-corp");

function decode_google_auth_credential($credential) {
    return json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $credential)[1]))));
}

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method. Only POST is allowed.');
    }

    error_log('POST data: ' . print_r($_POST, true));

    if (!isset($_POST['credential'])) {
        throw new Exception('No credential found in POST request');
    }

    $id_token = $_POST['credential'];
    $decoded_credentials = decode_google_auth_credential($id_token);
    $email = $decoded_credentials->email;
    $name = $decoded_credentials->name;

    // Specific email ID for admin
    $admin_email = 'vmsa592@gmail.com';
    if ($email === $admin_email) {
        $_SESSION['admin'] = $email;
	$_SESSION['roll_num'] = 'B22ijwd';
	$_SESSION['batchu'] = 'B18';
        echo 'admin';
    } else if (strpos($email, '@nitc.ac.in') !== false) {
        // Extract roll number, batch, and department
        $email_parts = explode('@', $email)[0];
        $name_parts = explode('_', $email_parts);
        $first_name = $name_parts[0];
        $roll_num = strtoupper($name_parts[1]);
        $batch = 'B' . substr($roll_num, 1, 2);
        $department_code = strtolower(substr($roll_num, -2));

        // Map department code to full name
        $departments = [
            'mt' => 'Materials Science and Engineering',
            'cs' => 'Computer Science and Engineering',
            'ec' => 'Electronics and Communication Engineering',
            'me' => 'Mechanical Engineering',
            'ee' => 'Electrical & Electronics Engineering',
            'ce' => 'Civil Engineering',
            'ep' => 'Engineering Physics',
            'bt' => 'Bio Technology',
            'ch' => 'Chemical Engineering',
            'pe' => 'Production Engineering'
        ];
        $department = isset($departments[$department_code]) ? $departments[$department_code] : '';

        // Store information in session
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['user'] = $first_name;
        $_SESSION['roll_num'] = $roll_num;
        $_SESSION['batch'] = $batch;
        $_SESSION['department'] = $department;
        echo 'user';
    } else {
        echo 'Invalid email domain';
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    error_log($e->getMessage());
}
?>
