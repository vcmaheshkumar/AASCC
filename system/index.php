<?php
include 'Functions/config.php';
session_start();
if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if($row['role'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['type'] = $row['role'];
         header('location: http://localhost/projectApollo/administration');
      }elseif($row['role'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         $_SESSION['type'] = $row['role'];
         header('location: http://localhost/projectApollo/faculty');
      }elseif($row['role'] == 'librarian'){
         $_SESSION['librarian_name'] = $row['name'];
         header('location: http://localhost/projectApollo/library-management');
      }elseif($row['role'] == 'atendencemaintainer'){
         $_SESSION['atendencemaintainer_name'] = $row['name'];
         header('location: http://localhost/projectApollo/attendance-login');
      }
      // elseif($row['role'] == 'parents'){
      //    $_SESSION['parents_name'] = $row['name'];
      //    $_SESSION['type'] = $row['role'];
      //    header('location: http://localhost/projectApollo/system/parents/');
      // }
   }else{
      $_SESSION['error'] = "email or password should be incorrect";
   }
};
if(isset($_SESSION['admin_name'])){
   header('location: http://localhost/projectApollo/administration');
}if(isset($_SESSION['user_name'])){
   header('location: http://localhost/projectApollo/faculty');
}if(isset($_SESSION['librarian_name'])){
   header('location: http://localhost/projectApollo/Librarian/');
}if(isset($_SESSION['atendencemaintainer_name'])){
   header('location: http://localhost/projectApollo/attendance-login');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="http://localhost/projectApollo/assets/images/logo.png" />
   <title>MANAGEMENT LOGIN</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
               <div class="card-header">
                  <h3 class="text-center font-weight-light my-4">Login</h3>
               </div>
               <div class="card-body">
                  <?php 
                     if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'><h4>Error!</h4>".$_SESSION['error']."</div>";
                     }
                  ?>
                  <form method="POST">
                     <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" required/>
                        <label for="inputEmail">Email address</label>
                     </div>
                     <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Password" required/>
                        <label for="inputPassword">Password</label>
                     </div>
                     <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                     <button class="btn btn-primary" name="submit">Login</button>
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