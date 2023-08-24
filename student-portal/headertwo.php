<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);

    session_start();
    require ('../includes/conn.php');

    if(isset($_SESSION['std-id'])) {
        $uid = filter_var($_SESSION['std-id'], FILTER_SANITIZE_NUMBER_INT);
        $img_stmt = $conn->prepare("SELECT avatar FROM students WHERE id = ?");
        $img_stmt->bind_param('i' , $uid);
        $img_stmt->execute();
        $fetched_img = $img_stmt->get_result()->fetch_assoc();

        $name_stmt = $conn->prepare("SELECT firstname FROM students WHERE id = ?");
        $name_stmt->bind_param('i', $uid);
        $name_stmt->execute();
        $fetched_name = $name_stmt->get_result()->fetch_assoc()['firstname'];

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
    <link rel="stylesheet" href="studentportal.css">
    <title>ICT-Institute Of Comunication technology</title>
</head>

<body>

    <header>
        <div class="txt-dv">
            <h2>Welcome <?= $fetched_name ?></h2>
        </div>
        <div class="img-dv">
            <img src="<?= ROOT_URL . 'images_std/' . $fetched_img['avatar'] ?>">
            <form action="<?= SEC_URL?>logout.php" method="post">
                <button type="submit" class="btn sm" name="logout">logout</button>
            </form>
        </div>
    </header>


</body>
</html>