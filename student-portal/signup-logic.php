<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require ('../includes/conn.php');

    //sanitize inputs 

    if(isset($_POST['submit'])) {
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $rollnmbr = filter_var($_POST['roll'], FILTER_SANITIZE_NUMBER_INT);
        $deparment = filter_var($_POST['department'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $semester = filter_var($_POST['semester'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $con_password = filter_var($_POST['con_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $avatar = $_FILES['avatar'];

        //validate inputs
        if(!$firstname) {
            $_SESSION ['signup'] = "Please enter your firstname";
        } elseif (!$lastname) {
            $_SESSION ['signup'] = "Please enter your lastname";
        } elseif (!$rollnmbr) {
            $_SESSION ['signup'] = "Please enter your roll number";
        } elseif (!$deparment) {
            $_SESSION ['signup'] = "Please enter your department name";
        } elseif (!$semester) {
            $_SESSION ['signup'] = "Please enter your semester";
        } elseif (!$email) {
            $_SESSION ['signup'] = "Please enter a valid email address";
        } elseif (strlen($password) < 8 || strlen($con_password) < 8) {
            $_SESSION ['signup'] = "Please enter a password of at least 8 characters";
        } elseif (!$avatar['name']) {
            $_SESSION ['signup'] = "Please select an avatar image";
        }
        else {
            if($password !== $con_password) {
                $_SESSION ['signup'] = "Passwords don't match";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    $time = time();
                    $avatar_name = $time . $avatar['name'];
                    $temp_name = $avatar['tmp_name'];
                    $path_to_img = '../images_std/' . $avatar_name;
                    var_dump($temp_name);

                    $file_type = ['png','jpg','jpeg'];
                    $file_ext = explode('.', $avatar_name);
                    $file_ext = end($file_ext);

                    if(in_array($file_ext, $file_type)) {

                        if($avatar['size'] < 600000 ) {
                            // moving the uploaded file to the temp directory.
                            move_uploaded_file($temp_name, $path_to_img);

                        } else {
                            $_SESSION['signup'] = "File size is too big. upload size less than 600KB";
                        }

                    } else {
                        $_SESSION['signup'] = "Invalid file type. Select PNG,JPG or JPEG.";
                    }

            }
        }

        if($_SESSION['signup']) {
            $_SESSION['signup-data'] = $_POST;
            header('location:' . SEC_URL . 'signup.php');
            die();
        } else {
            $statement = $conn->prepare("INSERT INTO students (firstname, lastname, roll, department, semester, email, pass, avatar) VALUES (?,?,?,?,?,?,?,?)");
            $statement->bind_param('ssisssss', $firstname , $lastname , $rollnmbr , $deparment , $semester , $email , $hashed_password , $avatar_name);
            $statement->execute();

            if(!mysqli_error($conn)) {
                $_SESSION['signup-success'] = "registration completed successfully";
                header('location:'. SEC_URL .'signin.php');
                die();
            }
        }

    } else {
        header('location: ' . SEC_URL . 'signup.php');
    }


?>