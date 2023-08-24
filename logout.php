<?php 

    require ('includes/const.php');

    if(isset($_POST['logout'])) {

    session_destroy();
    header('location:' . ROOT_URL . 'signin.php');
    exit();

    }
?>