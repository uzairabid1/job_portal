<?php
include('connection/db.php');
$category=$_POST['category'];
$Description=$_POST['Description'];
$Description = rtrim($Description," ");
$Description = ltrim($Description," ");


$query = mysqli_query($conn,"insert into job_category(category,des)values('$category','$Description')");

if($query){
    echo "Data has been successfully inserted";
}
else{
    echo "Error occurred";
}

?>