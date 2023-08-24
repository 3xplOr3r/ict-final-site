<?php

    require ('../includes/conn.php');
    require ('../includes/header.php');

    $current_usr = $_SESSION['user-id'];
    $query = "SELECT * FROM users WHERE NOT id = $current_usr";
    $fetch_usr_data = mysqli_query($conn, $query);

    if($_SERVER['REQUEST_METHOD'] == 'POST') {



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
    <link rel="stylesheet" href="panel.css">
    <title>ICT-Institute Of Comunication technology</title>
</head>
<body>
    <section class="dashboard">
        <div class="container dashboard_container">
            <aside>
                <ul>
                    <li>
                        <a href="add-post.html" class="active"><i class="uil uil-postcard"></i>
                            <h5>Add Posts</h5>
                        </a>    
                    </li>
                    <li>
                        <a href="manage-post.html"><i class="uil uil-edit-alt"></i>
                            <h5>Manage Posts</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-users.php"><i class="uil uil-edit-alt"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php"><i class="uil uil-edit-alt"></i>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="view-students.php"><i class="uil uil-users-alt"></i>
                            <h5>Students</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-document-info"></i>
                            <h5>Admission forms</h5>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-book-open"></i>
                            <h5>Attendance</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.html"><i class="uil uil-edit"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-category.html"><i class="uil uil-list-ui-alt"></i>
                            <h5>Manage Category</h5>
                        </a>
                    </li>

                </ul>
            </aside>

            <main>
                <h2>Manage Users</h2>
                <?php if(isset($_SESSION['user-up-succ'])) : ?>
                    <div class="alert_message success">
                        <p>
                            <?= $_SESSION['user-up-succ'];
                                unset($_SESSION['user-up-succ']);
                            ?>
                        </p>
                    </div>
                    <?php elseif(isset($_SESSION['user-up-err'])) : ?>
                    <div class="alert_message success">
                        <p>
                            <?= $_SESSION['user-up-err'];
                                unset($_SESSION['user-up-err']);
                            ?>
                        </p>
                    </div>
                    <?php endif ?>
                <table>
                    <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>role</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($usr_data = mysqli_fetch_assoc($fetch_usr_data)) : ?>
                        <tr>
                            <td><?= $usr_data['firstname'] ." ". $usr_data['lastname'] ?></td>
                            <td><?= $usr_data['username'] ?></td>
                            <td><?= $usr_data['email'] ?> </td>
                            <td><?= $usr_data['is_admin'] ?></td>
                            <form action="delete-user.php" method="post">
                                <input type="hidden" name="id" value="<?= $usr_data['id'] ?>">
                            <td><input type="submit" name="delete" class="btn sm danger" value="Delete"></td>
                            </form>

                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </main>

        </div>
    </section>

</body>
</html>