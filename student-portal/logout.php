<?php 
    require ('../includes/const.php');

    if(isset($_POST['logout'])) {

        session_destroy();

        // cache control headers //
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');

        header('location:' . SEC_URL . 'signin.php');
    exit();

    }

?>