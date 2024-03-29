<?php
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

    <section class="dashboard">
    <?php if($_SESSION['user_is_admin']) : ?>
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
                        <a href="./attendance.php"><i class="uil uil-book-open"></i>
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
                <h2>Manage Category</h2>
                <table>
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>title</th>
                            <th>title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>cse</td>
                            <td><a href="#" class="btn sm">edit</a></td>
                            <td><a href="#" class="btn sm danger">delete</a></td>
                        </tr>
                        <tr>
                            <td>cse</td>
                            <td><a href="#" class="btn sm">edit</a></td>
                            <td><a href="#" class="btn sm danger">delete</a></td>
                        </tr>
                        <tr>
                            <td>cse</td>
                            <td><a href="#" class="btn sm">edit</a></td>
                            <td><a href="#" class="btn sm danger">delete</a></td>
                        </tr>
                        <tr>
                            <td>cse</td>
                            <td><a href="#" class="btn sm">edit</a></td>
                            <td><a href="#" class="btn sm danger">delete</a></td>
                        </tr>
                        <tr>
                            <td>cse</td>
                            <td><a href="#" class="btn sm">edit</a></td>
                            <td><a href="#" class="btn sm danger">delete</a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </main>

        </div>
        <?php endif ?>
    </section>

    <script src="panel.js"></script>
    
</body>
</html>