<?php
require "Models/conn.php";

if(isset($_POST['addMaterial']) && isset($_FILES['pdfStudyMaterial'])){
    $uploadedBy = mysqli_real_escape_string($conn, $_POST['uploadedBy']);
    $nameOfTheStudyMaterial = mysqli_real_escape_string($conn, $_POST['nameOfTheStudyMaterial']);
    $subjectName = mysqli_real_escape_string($conn, $_POST['subjectName']);
    $classBelongsTo = mysqli_real_escape_string($conn, $_POST['classBelongsTo']);
    $date = date("Y-m-d");

    // file system

    $pdfStudyMaterialFilename = $_FILES['pdfStudyMaterial']['name'];
    $pdfStudyMaterialSize = $_FILES['pdfStudyMaterial']['size'];
    $pdfStudyMaterialTmp_name = $_FILES['pdfStudyMaterial']['tmp_name'];
    $error = $_FILES['pdfStudyMaterial']['error'];

    if($error == 0){
        if($pdfStudyMaterialSize > 325000){
            $em = "Too large";
            $_SESSION['error'] = $em;
        }else{
            $pdfStudyMaterial_ex = pathinfo($pdfStudyMaterialFilename, PATHINFO_EXTENSION);
            $pdfStudyMaterial_ex_lc = strtolower($pdfStudyMaterial_ex);

            $allowed_exs = array("pdf", "docx", "pptx");

            if(in_array($pdfStudyMaterial_ex_lc, $allowed_exs)){
                $new_file_name = uniqid("FILE-",true).'.'.$pdfStudyMaterial_ex_lc;
                $file_upload_path = '../../../studyMaterial/'.$new_file_name;
                move_uploaded_file($pdfStudyMaterialTmp_name, $file_upload_path);

                $studyMaterialSql = "INSERT INTO studymaterial (`uploadedBy`, `nameOfTheStudyMaterial`, `pdfStudyMaterial`, `subjectName`, `classBelongsTo`, `date`) VALUE (?, ?, ?, ?, ?, ?)";
                $studyMaterialStmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($studyMaterialStmt,$studyMaterialSql)){
                    die(mysqli_error($conn));
                }
                mysqli_stmt_bind_param($studyMaterialStmt, "ssssss",
                                                        $uploadedBy,
                                                        $nameOfTheStudyMaterial,
                                                        $new_file_name,
                                                        $subjectName,
                                                        $classBelongsTo,
                                                        $date);
                mysqli_stmt_execute($studyMaterialStmt);
                $_SESSION['study'] = "Material Posted Successfully";
            }else{
                $_SESSION['error'] = "extension not supported";
            }
        }
    }else{
        $_SESSION['error'] = "try again";
    }
}

