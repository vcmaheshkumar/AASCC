<?php
error_reporting(0);
session_start();
if ($_SESSION['type'] != "studentsleader" ) {
   echo "<h1>503 Access Denied</h1>";
   exit();
}
include 'Functions/Models/conn.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO users(name, email, password, role) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
      }
   }
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AAASCC | STUDENTS | COORDINATOR</title>
    <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/favicon.ico" type="image/x-icon">

   <!-- custom css file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-5">
         <div class="card shadow-lg border-0 rounded-lg mt-5">
               <a href="http://localhost/projectApollo/logout" class="btn btn-danger">Logout</a>
            <div class="card-header">
               <h3 class="text-center font-weight-light my-4">Create users</h3>
               <h5 class="text-center font-weight-light my-4"><?php echo $_SESSION['studentleader_name']; ?></h5>
            </div>
            <div class="card-body">
               <form method="post">
                     <div class="form-control mb-3">
                        <label for="name">For Parents enter Parents name / For Students enter Students name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                     </div>
                     <div class="form-control mb-3">
                        <label for="email">For Parents enter candidate roll number / For Students enter their own email</label>
                        <input type="text" name="email" id="email" class="form-control" required placeholder="Username">
                     </div>
                     <div class="form-control mb-3">
                        <label for="password">For both Parents and Students enter the candidate name</label>
                        <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
                     </div>
                     <div class="form-control mb-3">
                        <label for="cPassword">Confirmation Password</label>
                        <input type="password" name="cpassword" class="form-control" id="cPassword" required placeholder="Confirmation  Password">
                     </div>
                     <div class="form-group mb-3">
                        <label for="userType">Select Type: </label>
                        <select class="border-0" name="user_type" id="userType" required>
                           <option>Select Parents or Students</option>
                           <option value="parents">Parents</option>
                           <option value="student">Students</option>
                        </select>
                     </div>
                     <input type="submit" name="submit" value="Create" class="btn btn-success w-100">
                  </form>
            </div>
         </div>
      </div>
   </div>

</div>

</body>
</html>