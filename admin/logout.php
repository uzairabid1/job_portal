<?php
session_start();
session_unset();

include('connection/db.php');


$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and admin_type='2'");
if ($query) {
    header('location:http://localhost:8080/job_portal');
}else{
    header('location:admin_login.php');
}
?>