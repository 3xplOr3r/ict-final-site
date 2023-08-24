<?php
    require 'const.php';
    session_start();

    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if(mysqli_connect_errno()) {
        die(mysqli_connect_error());
    }

?>