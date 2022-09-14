<?php
include "../Functions/Models/conn.php";

if(isset($_POST['postBtn']) && isset($_FILES['postPic'])){
    $postedBy = mysqli_real_escape_string($conn, $_POST['name']);
    $postText = mysqli_real_escape_string($conn, $_POST['postText']);
    $date = date('Y-m-d');

    // Image
    $img_name = $_FILES['postPic']['name'];
    $img_size = $_FILES['postPic']['size'];
    $tmp_name = $_FILES['postPic']['tmp_name'];
    $error = $_FILES['postPic']['error'];

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
                $img_upload_path = 'post/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $gallerySql = "INSERT INTO social (name,postText,image,date) VALUE (?, ?, ?, ?)";
                $galleryStmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($galleryStmt, $gallerySql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($galleryStmt, "ssss",
                                                        $postedBy,
                                                        $postText,
                                                        $new_img_name,
                                                        $date);
                mysqli_stmt_execute($galleryStmt);
                $_SESSION['success'] = "Post Posted Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
        $_SESSION['error'] = "Try again";
    }
}