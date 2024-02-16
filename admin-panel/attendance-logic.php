<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../includes/conn.php');


$firstDay = date("1-m-Y");
$totalDays = date("t", strtotime($firstDay));

$dept = isset($_POST["department"]) ? $_POST["department"] : null;
$sem = isset($_POST["semester"]) ? $_POST["semester"] : null;
$subject = isset($_POST["subject"]) ? $_POST["subject"] : null;

$_SESSION['subject'] = $subject;


$query = $conn->prepare("SELECT * FROM students WHERE department=? AND semester=?");
$query->bind_param('ss', $dept, $sem);
$query->execute();

$getStud = $query->get_result();
$students = $getStud->fetch_all(MYSQLI_ASSOC);

if (!empty($students)) {
    echo "<h1>Attendance sheet for $subject</h1>";
    echo '<form method="post" action="save_attendance.php">'; 

    echo '<table border="1" cellspacing="0">';
    echo '<tr>';
    echo '<td rowspan="2">Names</td>';
    for ($j = 1; $j <= $totalDays; $j++) {
        echo "<td>$j</td>";
    }
    echo '</tr>';
    echo '<tr>';
    for ($j = 0; $j < $totalDays; $j++) {
        echo '<td>' . date("D", strtotime("+$j days", strtotime($firstDay))) . '</td>';
    }
    echo '</tr>';

    foreach ($students as $student) {
        $rollNumber = $student['roll'];
        $firstname = $student['firstname'];
        $lastname = $student['lastname'];

        echo '<tr>';
        echo "<td>{$firstname} {$lastname}</td>";

        for ($j = 0; $j <= $totalDays; $j++) {
            
            $date = date("Y-m-d", strtotime("+$j days", strtotime($firstDay)));

            echo '<td>';
            echo "P <input type='checkbox' name='attendance[$rollNumber][$date]' value='P'>";
            echo "A <input type='checkbox' name='attendance[$rollNumber][$date]' value='A'>";
            echo '</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
    echo '<input type="submit" value="Save Attendance">';
    echo '</form>';
} else {
    echo 'No data found';
}
?>
