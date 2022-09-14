<?php
include 'Functions/Models/conn.php';
session_start();
if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['role'] == 'parents'){
            $_SESSION['parents_name'] = $row['name'];
            $_SESSION['type'] = $row['role'];
            header('location: http://localhost/projectApollo/parents-portal');
        }elseif($row['role'] == 'student'){
            $_SESSION['student_name'] = $row['name'];
            $_SESSION['type'] = $row['role'];
            header('location: http://localhost/projectApollo/students-portal');
        }elseif($row['role'] == 'studentsleader'){
            $_SESSION['studentleader_name'] = $row['name'];
            $_SESSION['type'] = $row['role'];
            header('location: http://localhost/projectApollo/student-representative');
        }else{
            $_SESSION['error'] = "email or password should be incorrect";
        }
    }
}
if(isset($_SESSION['parents_name'])){
   header('location: http://localhost/projectApollo/parents-portal');
}if(isset($_SESSION['student_name'])){
   header('location: http://localhost/projectApollo/students-portal');
}if(isset($_SESSION['studentleader_name'])){
   header('location: http://localhost/projectApollo/student-representative');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/favicon.ico" type="image/x-icon">
   <title>USERS LOGIN</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
               <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Login</h3>
                  <p>For student coordinator : you will be instructed by class in-charge</p>
               </div>
               <div class="card-body">
                  <?php 
                     if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                     }
                  ?>
                  <form method="POST">
                     <p><span class="text-danger">For Parents: enter your son/daughter's Roll Number an Username</span><br/><span class="text-success">பெற்றோர்களுக்கு: உங்கள் மகன் / மகளின்  பட்டியல் எண்ணை பயனர்பெயராக உள்ளிடவும்</span></p>
                     <p><span class="text-danger">For Students: enter your email id as a username.</span><br/><span class="text-success">மாணவர்களுக்கு: உங்கள் மின்னஞ்சல் ஐடியை பயனர்பெயராக உள்ளிடவும்.</span></p>
                     <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="text" name="email" placeholder="Roll Number or email" required/>
                        <label for="inputEmail" class="text-muted">Username / பயனர்பெயர்</label>
                     </div>
                     <p><span class="text-danger">For Parents: enter your son/daughter's name as a password.</span><br/><span class="text-success">பெற்றோர்களுக்கு: கடவுச்சொல்லாக உங்கள் மகன் / மகளின் பெயரை உள்ளிடவும்.</span></p>
                     <p><span class="text-danger">For Students: enter your name as a password</span><br/><span class="text-success">மாணவர்களுக்கு: கடவுச்சொல்லாக உங்கள் பெயரை உள்ளிடவும்</span></p>
                     <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required/>
                        <label for="inputPassword" class="text-muted">Password / அடையாளச் சொல்</label>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                     <button class="btn btn-primary" name="submit">Login / உள்நுழை</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>