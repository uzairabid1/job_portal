<?php
include('connection/db.php');
$Company=$_POST['Company'];
$Description=$_POST['Description'];
$Description = rtrim($Description," ");
$Description = ltrim($Description," ");


$query = mysqli_query($conn,"insert into company(company,des)values('$Company','$Description')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "Error occurred";
}

?>