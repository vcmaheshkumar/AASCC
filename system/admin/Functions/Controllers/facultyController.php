<?php
include "Models/conn.php";

if (isset($_POST['addFaculty'])){
    // Text variables
    $facultyname = mysqli_real_escape_string($conn, $_POST['facultyname']);
    $facultyemail = mysqli_real_escape_string($conn, $_POST['facultyemail']);
    $facultyexperience = mysqli_real_escape_string($conn, $_POST['facultyexperience']);
    $facultyimage = $_FILES['facultyimage'];
    $facultyappointfrom = mysqli_real_escape_string($conn, $_POST['facultyappointfrom']);
    $facultyidnumber = mysqli_real_escape_string($conn, $_POST['facultyidnumber']);
    $facultyphonenumber = mysqli_real_escape_string($conn, $_POST['facultyphonenumber']);
    $facultydesignation = mysqli_real_escape_string($conn, $_POST['facultydesignation']);
    $facultydepartment = mysqli_real_escape_string($conn, $_POST['facultydepartment']);
    $facultyqualification = mysqli_real_escape_string($conn, $_POST['facultyqualification']);
    $facultygender = mysqli_real_escape_string($conn, $_POST['facultygender']);
    $facultyaddress = mysqli_real_escape_string($conn, $_POST['facultyaddress']);
    $facultysociallink1 = mysqli_real_escape_string($conn, $_POST['facultysociallink1']);
    $facultysociallink2 = mysqli_real_escape_string($conn, $_POST['facultysociallink2']);
    $facultysociallink3 = mysqli_real_escape_string($conn, $_POST['facultysociallink3']);
    $facultysociallink4 = mysqli_real_escape_string($conn, $_POST['facultysociallink4']);
    $datecreated = date('Y-m-d');
    $attendance = mysqli_real_escape_string($conn, $_POST['attendance']);

    // Image
    $img_name = $_FILES['facultyimage']['name'];
    $img_size = $_FILES['facultyimage']['size'];
    $tmp_name = $_FILES['facultyimage']['tmp_name'];
    $error = $_FILES['facultyimage']['error'];

    if($error == 0){
        if($img_size > 325000){
            $em = "Too large";
            $_SESSION['error'] = $em;
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = '../../../faculties/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Query
                $facultySql = "INSERT INTO faculties (facultyname,facultyemail,facultyimage,facultyexperience,facultyappointfrom,facultyidnumber,facultyphonenumber,facultydesignation,facultydepartment,facultyqualification,facultygender,facultyaddress,facultysociallink1,facultysociallink2,facultysociallink3,facultysociallink4,datecreated,attendance) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $facultyStmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($facultyStmt, $facultySql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($facultyStmt, "ssssssssssssssssss",
                                                        $facultyname,
                                                        $facultyemail,
                                                        $new_img_name,
                                                        $facultyexperience,
                                                        $facultyappointfrom,
                                                        $facultyidnumber,
                                                        $facultyphonenumber,
                                                        $facultydesignation,
                                                        $facultydepartment,
                                                        $facultyqualification,
                                                        $facultygender,
                                                        $facultyaddress,
                                                        $facultysociallink1,
                                                        $facultysociallink2,
                                                        $facultysociallink3,
                                                        $facultysociallink4,
                                                        $datecreated,
                                                        $attendance);
                mysqli_stmt_execute($facultyStmt);
                $_SESSION['success'] = "Faculties Entered Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
    $_SESSION['error'] = "Try again";
    }
}