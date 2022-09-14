<?php
include "Models/conn.php";
 
if (isset($_POST['addImage']) && isset($_FILES['image'])) {
    $adminName = $_POST['adminName'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $attribute = mysqli_real_escape_string($conn, $_POST['attribute']);
    $imgTag = mysqli_real_escape_string($conn, $_POST['imgTag']);
    $date = date('Y-m-d');

    $img_name = $_FILES['image']['name'];
    $img_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

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
                $img_upload_path = '../../../../assets/images/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $gallerySql = "INSERT INTO gallery (adminName,title,image,attribute,imgTag,date) VALUE (?, ?, ?, ?, ?, ?)";
                $galleryStmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($galleryStmt, $gallerySql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($galleryStmt, "ssssss",
                                                        $adminName,
                                                        $title,
                                                        $new_img_name,
                                                        $attribute,
                                                        $imgTag,
                                                        $date);
                mysqli_stmt_execute($galleryStmt);
                $_SESSION['success'] = "Image Posted Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
        $_SESSION['error'] = "Try again";
    }
}

if(isset($_POST['updateImage'])){
    $id = $_POST['galleryid'];
    $adminName = $_POST['uadminName'];
    $title = mysqli_real_escape_string($conn, $_POST['utitle']);
    $attribute = mysqli_real_escape_string($conn, $_POST['uattribute']);
    $imgTag = mysqli_real_escape_string($conn, $_POST['uimgTag']);
    $date = date('Y-m-d');

    // Image
    $img_name = $_FILES['uimage']['name'];
    $img_size = $_FILES['uimage']['size'];
    $tmp_name = $_FILES['uimage']['tmp_name'];
    $error = $_FILES['uimage']['error'];
    $oldImage = $_POST['imageOld'];

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
                $img_upload_path = '../../../../assets/images/'.$new_img_name;
                // Delete
                $oldImageDes = "../../../../assets/images/".$oldImage;
                if(unlink($oldImageDes)){
                    // just deleted
                    move_uploaded_file($tmp_name, $img_upload_path);
                }else{
                    // error or already deleted
                    move_uploaded_file($tmp_name, $img_upload_path);
                } 
                // update Database
                $ugallerySql = "UPDATE gallery SET adminName='$adminName', 
                                                                            title='$title', 
                                                                            image='$new_img_name', 
                                                                            attribute='$attribute', 
                                                                            imgTag='$imgTag', 
                                                                            date='$date' WHERE id=$id";
                $ugalleryQuery = mysqli_query($conn, $ugallerySql);
                $_SESSION['success'] = "Image Updated Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
        $_SESSION['error'] = "Try again";
    }


}