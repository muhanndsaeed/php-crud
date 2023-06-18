<?php
require_once("db.php");
$id = $_GET['id'];

if (isset($_POST['submit'])){
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $coursedata = mysqli_query($con,"INSERT INTO courses(coursename,semester,stdid) VALUES('$course','$semester','$id')");

    if($coursedata){
        header("location: courses.php?id=".$id);
        exit();  
      }
    
}
?><form action="" method="post">

    <input type="text" name="course" id="">
    <label for="cars">Choose Semester</label>

    <select id="semester" name="semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    <input type="submit" value="Save" name="submit">
</form>