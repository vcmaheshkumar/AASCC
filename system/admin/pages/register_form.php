<?php
session_start();
if ($_SESSION['type'] != "admin" ) {
   echo "<h1>503 Access Denied</h1>";
   exit();
}

include '../Functions/Controllers/Models/conn.php';

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
   <title>ADMINISTRATION | ADD USERS </title>

   <!-- custom css file link  -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container">
   <div class="row justify-content-center">
         <a href="http://localhost/projectApollo/administration" class="btn btn-dark">Go to home page</a>
         <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
               <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Create users</h3>
               </div>
               <div class="card-body">
               <form method="post">
                  <div class="form-control mb-3">
                     <label for="name">Name</label>
                     <input type="text" name="name" id="name" class="form-control" placeholder="enter name" required>
                  </div>
                  <div class="form-control mb-3">
                     <label for="email">Email</label>
                     <input type="email" name="email" id="email" class="form-control" required placeholder="enter email">
                  </div>
                  <div class="form-control mb-3">
                     <label for="password">Password</label>
                     <input type="password" name="password" class="form-control" id="password" required placeholder="enter password">
                  </div>
                  <div class="form-control mb-3">
                     <label for="cPassword">Confirmation Password</label>
                     <input type="password" name="cpassword" class="form-control" id="cPassword" required placeholder="confirmation  password">
                  </div>
                  <div class="form-control mb-3">
                     <label for="userType">Select User Type</label>
                     <select class="form-control" name="user_type" id="userType">
                        <option value="user">User</option>
                        <option value="librarian">Librarian</option>
                        <option value="atendencemaintainer">Attendance Maintainer</option>
                        <option value="admin">admin</option>
                        <option value="studentsleader">Students Coordinator</option>
                     </select>
                  </div>
                  <input type="submit" name="submit" value="Create" class="btn btn-success w-100">
               </form>

</div>

</body>
</html>