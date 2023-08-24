<?php
    ob_start();
    // including connection and logs
    include "./includes/conn.php";
    include "success.php";

    // creating function to sanitize and validate user inputs 

    function sanitize($input){
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        $input = preg_replace("/[^a-zA-Z]/", "", $input);
        $input = preg_replace("/ +/", " ", $input);
        $input = str_replace(array('0','1','2','3','4','5','6','7','8','9'),'',$input);
        return $input;
    }

    function sanitize_int($data){
        $data = filter_var($data, FILTER_SANITIZE_NUMBER_INT);
        $data = preg_replace('/[^0-9\.]/', '', $data);
        return $data;
    }

    // initializing SERVER 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // File upload and store on a tmp file. 

        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $file_type = $_FILES['file']['type'];

        $ext = array("jpeg","jpg","png");
        $max_bits = 600000;

        if(in_array($file_ext, $ext) === false) {
            $_SESSION['status'] = "File type is not allowed";
            $_SESSION['status_text'] = "chose either jpeg,jpg or png file";
            $_SESSION['status_code'] = "error";
            header('Location: apply.php');
            exit();
        }

        if($file_size > $max_bits) {
            $_SESSION['status'] = "File size is too Big";
            $_SESSION['status_text'] = "chose less then file of 600kb";
            $_SESSION['status_code'] = "error";
            header('Location: apply.php');
            exit();
        }

        $file_up_name = time().$file_name;
        move_uploaded_file($tmp_name, "../includes/files/".$file_up_name);

        // Sanitizing and binding variables
        $name = sanitize($_POST['user_name']);
        $dob = sanitize_int($_POST['dob']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $num = sanitize_int($_POST['number']);
        $gender = sanitize($_POST['gender']);
        $jobrole = sanitize($_POST['ocupation']);
        $exam = sanitize($_POST['exam']);
        $gpa = $_POST['gpa'];
        $pass_year = sanitize_int($_POST['pass_year']);
        $dep = sanitize($_POST['department']);
        $img = $file_up_name;

        // Prepared statement
        $stmt = $conn->prepare("INSERT INTO candidates (uname, dob, email, num, gender, jobrole, exam, gpa, pass_year, dep, pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sisisssiiss", $name, $dob, $email, $num, $gender, $jobrole, $exam, $gpa, $pass_year, $dep, $img);
        $stmt->execute();

        // Checking if data has been recorded or not
        if($stmt->affected_rows > 0) {
            $_SESSION['status'] = "Admission Done";
            $_SESSION['status_text'] = "Your form has been submitted";
            $_SESSION['status_code'] = "success";
            header('Location: apply.php');
        } else {
            $_SESSION['status'] = "Submission Failed";
            $_SESSION['status_text'] = "Your form could not be submitted";
            $_SESSION['status_code'] = "error";
            header('Location: apply.php');
            ob_end_flush();
        }
        $stmt->close();
    }
    mysqli_close($conn);
?>


