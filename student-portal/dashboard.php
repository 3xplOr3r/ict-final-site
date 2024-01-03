<?php
    session_start();

    if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
        header('Location: ' . SEC_URL . 'dashboard.php');
        exit();
    } else {
        header('Location: ' . SEC_URL . 'signin.php');
        exit();
    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon/">
    <link rel="stylesheet" href="dashboard.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>ICT-Institute Of Comunication technology</title>
</head>
<body>

    <div class="sidebar">
        <ul>


            <li>
                <a href="dashboard.php">Dashboard</a>
            </li>

            <li>
                <a href="notices.php">Notices</a>
            </li>

            <li>
                <a href="routines.php">Class Routines</a>
            </li>

            <li>
                <a href="attendance.php">Attendances</a>
            </li>

            <li>
                <a href="lectures.php">Lectures</a>
            </li>

            <li>
                <a href="topics.php">Important Topics</a>
            </li>

            <li>
                <a href="results.php">Check Results</a>
            </li>


        </ul>
    </div>

    <div class="container">

        <div class="card zero">
            <div class="intro">
                <i class="uil uil-create-dashboard"></i>
                <a href="dashboard.php">Dashboard</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card one">
            <div class="intro">
                <i class="uil uil-file-question-alt"></i>
                <a href="notices.php">Notices</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card two">
            <div class="intro">
                <i class="uil uil-clipboard-blank"></i>
                <a href="routines.php">Routines</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card three">
            <div class="intro">
                <i class="uil uil-check-circle"></i>
                <a href="attendance.php">Attendance</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card four">
            <div class="intro">
                <i class="uil uil-video"></i>
                <a href="lectures.php">Lectures</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card five">
            <div class="intro">
                <i class="uil uil-create-dashboard"></i>
                <a href="topics.php">Important Topics</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

        <div class="card six">
            <div class="intro">
                <i class="uil uil-create-dashboard"></i>
                <a href="results.php">Check Result</a>
            </div>
            <div class="wave-container">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
        </div>

    </div>

    <script src="../assets/js/dashboard.js"></script>

</body>
</html>