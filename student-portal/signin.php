<?php 

    require('../includes/const.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="icon" href="../img/logo.png" type="image/x-icon/">
    <link rel="stylesheet" href="../admin-panel/panel.css">
    <title>ICT-Institute Of Comunication technology</title>
</head>
<body>

    <div class="center">
        <section class="form_section">
            <div class="container form_section-container">
                <h2>Sign In</h2>
        
                <?php if(isset($_SESSION['signup-success'])): ?>
                    <div class="alert_message success">
                        <p>
                            <?= $_SESSION['signup-success'];
                                unset($_SESSION['signup-success']);
                            ?>
                        </p>
                    </div>
                    <?php elseif(isset($_SESSION['signin'])) : ?>
                    <div class="alert_message error">
                        <p>
                            <?= $_SESSION['signin'];
                                unset($_SESSION['signin']);
                            ?>
                        </p>
                    </div>
                    <?php endif ?>

        
                <form action="<?= SEC_URL ?>signin-logic.php" method="post" onsubmit="validateForm()">
                    <input type="text" name="std_email" placeholder="Enter username or email">
                    <input type="password" name="std_pass" placeholder="Enter password">
                    
                    <div class="sess-btn">
                        <button type="submit" class="btn" name="submit">Sign In</button>
                        <small>not registerd yet? <a href="signup.php">Register</a></small>
                    </div>
                </form>
        
            </div>
        </section>

    </div>
    
</body>
</html>