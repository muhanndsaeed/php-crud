<?php 

require_once("db.php");

$stdid = $_GET["stdid"];
$id = $_GET["courseid"];

$restult  = mysqli_query($con,"DELETE FROM courses WHERE id = $id");
if ($restult){
    header("Location:courses.php?id=$stdid&msg=Deleted Course Sucessfully");
    exit();
}
?>