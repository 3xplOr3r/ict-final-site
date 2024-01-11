<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
require('../includes/conn.php');

if (isset($_POST['submit'])) {
    $std_mail = filter_var($_POST['std_email'], FILTER_SANITIZE_EMAIL);
    $std_pass = $_POST['std_pass'];

    if (empty($std_mail) || empty($std_pass)) {
        $_SESSION['signin'] = "Fields can't be empty";
    } else {

        $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
        $stmt->bind_param('s', $std_mail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $db_pass = $row['pass'];

            if (password_verify($std_pass, $db_pass)) {
                $_SESSION['std-id'] = $row['id'];
                $_SESSION['is_logged_in'] = true;
                header('Location: ' . SEC_URL . 'dashboard.php');
                exit();
            } else {
                $_SESSION['signin'] = "Wrong Credentials";
                header('Location: ' . SEC_URL . 'signin.php');
                exit();
            }
        } else {
            $_SESSION['signin'] = "User not found";
            header('Location: ' . SEC_URL . 'signin.php');
            exit();
        }

    }

} else {
    header('Location: ' . SEC_URL . 'signin.php');
    die();
}

?>
