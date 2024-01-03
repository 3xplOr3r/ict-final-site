<?php
// connection

require('../../includes/conn.php');


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database securely
$sql = "SELECT * FROM students"; // Your SQL query to retrieve data
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Prepare data to be returned as JSON
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Set appropriate headers and return JSON response
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "No data found";
}

$conn->close();
?>
