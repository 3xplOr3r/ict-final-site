<?php 
    session_start();
    require '../includes/const.php';

    $firstname = $_SESSION['signup-data']['firstname'] ?? null;
    $lastname = $_SESSION['signup-data']['lastname'] ?? null;
    $username = $_SESSION['signup-data']['username'] ?? null;
    $email = $_SESSION['signup-data']['email'] ?? null;
    unset($_SESSION['signup-data'])

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
                <h2>Sign Up</h2>
  
                <?php if(isset($_SESSION['signup'])): ?>
                    <div class="alert_message error">
                        <p>
                            <?=
                                $_SESSION['signup'];
                                unset($_SESSION['signup']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>

                <form action="<?= SEC_URL ?>signup-logic.php" enctype="multipart/form-data" method="post">
                    <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First name">
                    <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last name">
                    <input type="email" name="email" value="<?= $email ?>" placeholder="Enter your email">
                    <input type="password" name="password" placeholder="Create Passowrd">
                    <input type="password" name="con_password" placeholder="Confirm password">
                    <div class="form_control">
                        <label for="avatar">User Avatar</label>
                        <input type="file" id="avatar" name="avatar">
                    </div>
                    <div class="sess-btn">
                    <button type="submit" class="btn" name="submit">Register</button>
                    <small>already a user? <a href="signin.php">login</a></small>
                    </div>
                </form>
        
            </div>
        
        </section>
    </div>
    
</body>
</html>