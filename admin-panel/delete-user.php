<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

    require ('../includes/conn.php');

    if(isset($_POST['delete'])) {

        $id = $_POST['id'];

        $cmd = $conn->prepare("DELETE FROM users WHERE id = ?");
        $cmd->bind_param('i', $id);
        $cmd->execute();

        if($cmd) {
            $_SESSION['user-up-succ'] = "User deleted successfully";
            header('Location: ' . ROOT_URL . 'admin-panel/manage-users.php');
            die();
        } else {
            $_SESSION['user-up-err'] = "User could not be deleted";
            header('Location: ' . ROOT_URL . 'admin-panel/manage-users.php');
            die();
        }


    } else {
        header('Location: ' . ROOT_URL . 'admin-panel/manage-users.php');
        exit();
    }


?>