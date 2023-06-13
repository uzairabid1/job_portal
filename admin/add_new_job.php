<?php
session_start();
include('connection/db.php');
  $login=$_SESSION['email'];
 $job_title=$_POST['job_title'];
 $Description=$_POST['Description'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $city=$_POST['city'];
$Description = rtrim($Description," ");
$Description = ltrim($Description," ");
$job_title= ltrim($job_title," ");
$job_title= rtrim($job_title," ");
$category = $_POST['category'];
$Keyword = $_POST['Keyword'];


$query = mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city,keyword,category)values('$login','$job_title','$Description','$country','$state','$city','$Keyword','$category')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "Error occurred";
}

?>