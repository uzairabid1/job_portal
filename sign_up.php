<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="sign_up.php" method="post">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72"
            height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <label for="inputEmail" class="sr-only">First name</label>
        <input type="first_name" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name"
            required autofocus>

        <label for="inputEmail" class="sr-only">Last Name</label>
        <input type="last_name" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name"
            required autofocus>

        <label for="inputEmail" class="sr-only">Mobile Number</label>
        <input type="Number" id="mobile_number" name="mobile_number" class="form-control"
            placeholder="Email your mobile number" required autofocus>

        <label for="inputEmail" class="sr-only">Date Of birth</label>
        <input type="date" id="dob" name="dob" class="form-control" placeholder="Email your Date of birth" required
            autofocus>

        <input type="submit" class="btn btn-lg btn-primary btn-block mt-3" name="submit" value="Sign Up" />
        <a href="job-post.php">Already have an account?</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</body>

</html>
<?php
include('connection/db.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $mobile_number = $_POST['mobile_number'];
    
    $query = mysqli_query($conn, "insert into jobskeer(email,password,first_name,last_name,dob,mobile_number) values('$email','$password','$first_name','$last_name','$dob','$mobile_number')");
    if ($query) {
        echo "<script>alert('Now you can login!')</script>";
        header('location:job-post.php');
    } else {
        echo "<script>alert('Opps! Something went wrong')</script>";
    }
}
?>