<?php
include('connection/db.php');
$Company=$_POST['Company'];
$Description=$_POST['Description'];
$admin=$_POST['admin'];
$Description = rtrim($Description," ");
$Description = ltrim($Description," ");


$query = mysqli_query($conn,"insert into company(company,des,admin)values('$Company','$Description','$admin')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "Error occurred";
}

?>