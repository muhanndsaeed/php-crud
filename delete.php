<?php 
require_once("db.php");

$id = $_GET['id'];
echo $id;

$result= mysqli_query($con,"DELETE FROM students WHERE id = $id");

if($result){
    
    header("location: data.php?msg=Data Deleted successfully");
    
    exit();
}


?>