<?php 

    require ('../includes/conn.php');
    require ('../includes/header.php');

    $query = "SELECT * FROM candidates";
    $fetch = mysqli_query($conn, $query); 


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
                <h2>Addmission Forms</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>PDF</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($usr_data = mysqli_fetch_assoc($fetch)): ?>
                        <tr>
                            <td><?= $usr_data['id'] ?></td>
                            <td><?= $usr_data['uname'] ?></td>
                            <td><?= $usr_data['num'] ?></td>
                            <td><?= $usr_data['uname'] . ".pdf" ?></td>
                            <td>
                            <form action="download-pdf.php" method="post">
                                <input type="hidden" name="id" value="<?= $usr_data['id'] ?>">
                                <input type="submit" name="download" class="btn sm " value="Download">
                            </form>
                            </td>

                        </tr>
                        <?php endwhile ?>
                    </tbody>
                </table>
            </main>

        </div>
    </section>

</body>
</html>