<?php 
    include('../includes/conn.php');

    $stmt = $conn->prepare('SELECT * FROM students');
    $stmt->execute();
    
    $st_res = $stmt->get_result();
    while ($student = $st_res->fetch_assoc()) {
        $id = $student['id'];
        $avatar = $student['avatar'];
        $name = $student['firstname'] . $student['lastname'];
        $roll = $student['roll'];
        $semester = $student['semester'];
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

    <section class="view_std">
        <div class="view_std_form">

            <main>
                <h2>Students</h2>
                <table>
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Avatar</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Semester</th>
                            <th>profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?= $id ?></td>
                            <td>
                                <div><?= $avatar ?></div>
                            </td>
                            <td><?= $name ?></td>
                            <td><?= $roll ?></td>
                            <td><?= $semester ?></td>
                            <td><a href="#" class="btn sm">View</a></td>
                        </tr>
            </main>

        </div>
    </section>
    
</body>
</html>
