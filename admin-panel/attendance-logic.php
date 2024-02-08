<?php 

    require ('../includes/conn.php');


    $firstDay = date("d-m-Y");
    $totalDays = date("t", strtotime($firstDay));

    $dept = $_POST["department"];
    $sem = $_POST["semester"];

    $query = $conn->prepare("SELECT * FROM students WHERE department=? AND semester=?");
    $query->bind_param('ss',$dept,$sem);
    $query->execute();

    $getStud = $query->get_result();
    $students = $getStud->fetch_assoc();

    var_dump($students);

?>

<table border="1" cellspacing="0">
<?php

    for($i=1; $i<=$students + 2; $i++) {
        if($i == 1)
        {
            echo "<tr>";
            echo "<td rowspan='2'>Names</td>";
            for($j=1; $j<=$totalDays; $j++)
            {
                echo "<td>$j</td>";
            }
            echo "</tr>";
        }

        else if($i == 2)
        {
            echo "<tr>";
            for($j=0; $j<$totalDays; $j++)
            {
                echo "<td>" . date("D", strtotime("+$j days", strtotime($firstDay))) . "</td>";
            }
            echo "</tr>";
        }
        else 
        {
            echo "<tr>";
            echo "<td>";?><?= $students ?><?php "</td>";
            for($j=0; $j<$totalDays; $j++)
            {
                echo "<td></td>";
            }
            echo "</tr>";
        }
    }

?>
</table>