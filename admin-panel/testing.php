<?php 

error_reporting(E_ALL);
ini_set("display_errors", 1);
    include("../includes/conn.php");
// FETCH STUDENTS

    $department = isset($_GET['department']) ? $_GET['department'] : '';
    $semester = isset($_GET['semester']) ? $_GET['semester'] : '';
    $subject = isset($_GET['subject']) ? $_GET['subject'] : '';

    $stmt = $conn->prepare("SELECT * FROM students WHERE department = ? AND semester = ?");
    $stmt->bind_param('ss', $depatment, $semester);
    $stmt->execute();

    $result = $stmt->get_result();
    $studentData = array();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $studentData[] = array(
                'student_roll' => $row['roll'],
                'first_name' => $row['firstname'],
                'last_name' => $row['lastname'],
            );

        }
    };
    echo json_encode($studentData);
// GENERATE REPORT 

// $firstDay = date("1-m-Y");
// $totalDay = date("t", strtotime($firstDay));



?>
