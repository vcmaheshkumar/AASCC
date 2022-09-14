<?php
require "/xampp/htdocs/projectApollo/Functions/Models/conn.php";

if(isset($_POST['addReview']) && $_FILES['alumniImage']){
    $ipaddress = $_POST['ipaddress'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $batch = mysqli_real_escape_string($conn, $_POST['batch']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $dateOp = date('Y-m-d');
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $img_name = $_FILES['alumniImage']['name'];
    $img_size = $_FILES['alumniImage']['size'];
    $tmp_name = $_FILES['alumniImage']['tmp_name'];
    $error = $_FILES['alumniImage']['error'];

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
                $img_upload_path = '../assets/images/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $alumniSql = "INSERT INTO alumni (ipaddress,name,batch,image,department,dateop,comment,status) VALUE (?, ?, ?, ?, ?, ?, ?, ?)";
                $alumniStmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($alumniStmt, $alumniSql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($alumniStmt, "ssssssss",
                                                        $ipaddress,
                                                        $name,
                                                        $batch,
                                                        $new_img_name,
                                                        $department,
                                                        $dateOp,
                                                        $comment,
                                                        $status);
                mysqli_stmt_execute($alumniStmt);
                $_SESSION['success'] = "Alumni Posted Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
        $_SESSION['error'] = "Try again";
    }
}