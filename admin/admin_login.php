
<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
    <!-- <script src="js/admin_login.js"></script> -->
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="admin_login.php" id="admin_login" name="admin_login">
      <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="email" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="pass" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
   
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" placeholder="Sign In">
      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
  </body>
</html>

<?php
include('connection/db.php');

if(isset($_POST['submit'])){
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $query = mysqli_query($conn,"select * from admin_login where admin_email = '$email' and admin_pass = '$pass'");

 if($query){
  if(mysqli_num_rows($query)>0){
    $_SESSION['email'] = $email;
    
    header('location:admin_dashboard.php');
  }
  else{
    echo "<script>alert('Email or password incorrect, please try again')</script>";
  }
 } 

}



?>
