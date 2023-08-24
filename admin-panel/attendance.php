<?php 
    require ('../includes/const.php');
    require_once ('../includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon/">
    <link rel="stylesheet" href="panel.css">
    <title>ICT-Institute Of Comunication technology</title>
</head>
<body>

    <div class="center">
        <section class="form_section"> 
            <div class="container form_section-container">

                    <?php if(isset($_SESSION[''])) : ?>
                    <div class="alert_message success">
                        <p>
                            <?= $_SESSION[''];
                                unset($_SESSION['']);
                            ?>
                        </p>
                    </div>
                    <?php elseif (isset($_SESSION[''])): ?>
                        <div class="alert_message error">
                        <p>
                            <?= $_SESSION[''];
                                unset($_SESSION['']);
                            ?>
                        </p>
                        </div>
                    <?php endif ?>

                <h2>Update Attendance</h2>
        
                <form action="<?= ROOT_URL ?>admin-panel/attendance-logic.php" method="POST">
                    <input type="number" name="roll" placeholder="Roll">
                    <input type="number" name="days" placeholder="Total Days">

                    <div class="sess-btn">
                        <button type="submit" class="btn" name="submit">Update Attendance</button>
                    </div>
                </form>
        
            </div>
        </section>

    </div>
    
</body>
</html>