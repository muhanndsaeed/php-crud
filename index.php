<?php

require_once("db.php");

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $data = mysqli_query($con,"INSERT INTO students (name,email,age) VALUES('$name','$email','$age')");

    if($data){
        echo "Success";
        header("Location:data.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form class="form-group" action="" method="post">
        <input type="text" name="name" id="">
        <br />
        <input type="text" name="email" id="">
        <br />
        <input type="number" name="age" id="">
        <br />
        <input type="submit" class="btn btn-primary" name="submit" id="">
    </form>
</body>

</html>