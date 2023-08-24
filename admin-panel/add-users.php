<?php 
    require ('../includes/const.php');
    require_once ('../includes/header.php');

    $firstname = $_SESSION['input-error-data']['firstname'] ?? null;
    $lastname = $_SESSION['input-error-data']['lastname'] ?? null;
    $username = $_SESSION['input-error-data']['username'] ?? null;
    unset($_SESSION['input-error-data']);

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

                    <?php if(isset($_SESSION['add-user-success'])) : ?>
                    <div class="alert_message success">
                        <p>
                            <?= $_SESSION['add-user-success'];
                                unset($_SESSION['add-user-success']);
                            ?>
                        </p>
                    </div>
                    <?php elseif (isset($_SESSION['add-user-error'])): ?>
                        <div class="alert_message error">
                        <p>
                            <?= $_SESSION['add-user-error'];
                                unset($_SESSION['add-user-error']);
                            ?>
                        </p>
                        </div>
                    <?php endif ?>

                <h2>Add User</h2>
        
                <form action="<?= ROOT_URL ?>admin-panel/adduser-logic.php" method="POST">
                    <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Firstname">
                    <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Lastname">
                    <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
                    <select name="role">
                        <option value="0">Author</option>
                        <option value="1">Admin</option>
                    </select>

                    <div class="sess-btn">
                        <button type="submit" class="btn" name="submit">Update Post</button>
                    </div>
                </form>
        
            </div>
        </section>

    </div>
    
</body>
</html>