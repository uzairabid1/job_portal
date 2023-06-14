<?php
session_start();
session_unset();

include('connection/db.php');


$query=mysqli_query($conn,"select * from jobskeer  where email='{$_SESSION['email']}'");
if ($query) {
    header('location:http://localhost:8080/job_portal');
}else{
    header('location:job-post.php');
}
?>