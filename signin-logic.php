<?php

    require('includes/conn.php');

    if(isset($_POST['submit'])) {

        $user_email = filter_var($_POST['user_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $user_pass = filter_var($_POST['user_pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


        if(!$user_email) {
            $_SESSION ['signin'] = "User name or Email required";
            header('Location:' . ROOT_URL . 'signin.php');
        } elseif(!$user_pass) {
            $_SESSION ['signin'] = "Password required";
            header('Location:' . ROOT_URL . 'signin.php');
        } else {

            $match_usr_query = "SELECT * FROM users WHERE username = '$user_email' OR email = '$user_email'";
            $match_usr_res = mysqli_query($conn , $match_usr_query);

            if(mysqli_num_rows($match_usr_res) == 1) {

                //converting match_usr_res variable to a array. it will help in future 
                //to compare passwords or user records if needed.
                $user_record = mysqli_fetch_assoc($match_usr_res);
                $db_pass = $user_record['pass'];

                //compare password
                if(password_verify($user_pass , $db_pass)) {
                    //access control
                    $_SESSION['user-id'] = $user_record['id'];
                    //if user is admin 
                    if($user_record['is_admin'] == 1) {
                        $_SESSION['user_is_admin'] = true;

                    } header('location: ' . ROOT_URL . 'admin-panel/dashboard.php');

                } else {
                    $_SESSION['signin'] = "Incorrect password";
                }

            } else {
                $_SESSION['signin'] = "User not found";
            }
            if($_SESSION['signin']) {
                header('Location: ' . ROOT_URL . 'signin.php');
                die();
            }

        }


    } else {
        header('location:' . ROOT_URL . 'signin.php');
        die();
    }


?>