<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require('../includes/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // sanitize the input fields
    $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_SPECIAL_CHARS);

    // prepare and execute the SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE firstname = ? AND lastname = ? AND username = ?");
    $stmt->bind_param('sss', $firstname, $lastname, $username);
    $stmt->execute();

    // check if there is a match in the database
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // update the user's role
        $stmt = $conn->prepare("UPDATE users SET is_admin = ? WHERE id = ?");
        $stmt->bind_param('ii', $role, $user['id']);
        $stmt->execute();
        $_SESSION['add-user-success'] = "User role updated!";
        header('Location: ' . ROOT_URL . 'admin-panel/add-users.php');
        exit();
    } else {
        $_SESSION['add-user-error'] = "No matching user found in the database.";
        header('Location: ' . ROOT_URL . 'admin-panel/add-users.php');
        exit();
    }
}
