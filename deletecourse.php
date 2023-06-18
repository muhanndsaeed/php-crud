<?php 

require_once("db.php");

$stdid = $_GET["stdid"];
$id = $_GET["id"];

$restult  = mysqli_query($con,"DELETE FROM courses WHERE stdid = $stdid AND id = $id");
if ($restult){
    header("Location:courses.php?id=$stdid&msg=Deleted Course Sucessfully");
    exit();
}
?>