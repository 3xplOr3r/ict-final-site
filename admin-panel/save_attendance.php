<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('../includes/conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Process the attendance data
    $attendanceData = $_POST['attendance'];
    $subject = isset($_SESSION["subject"]) ? $_SESSION["subject"] : null;

    // Iterate through the attendance data
    foreach ($attendanceData as $rollNumber => $dates) {
        foreach ($dates as $date => $status) {
            
            $insertQuery = $conn->prepare("INSERT INTO attendance (roll, date, subject_name, status) VALUES (?, ?, ?, ?)");
            $insertQuery->bind_param('ssss', $rollNumber, $date, $subject, $status);

            // Execute the query to insert the attendance record
            $insertQuery->execute();
        }
    }

    $insertQuery->close();


    header('Location: attendance.php');
    exit();
} else {

    header('Location: attendance.php');
    exit();
}
?>
