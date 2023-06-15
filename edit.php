<?php

require_once("db.php");

$id= $_GET["id"];

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $data = mysqli_query($con,"UPDATE `students` SET `name` = '$name', `email` = '$email', `age` = '$age' WHERE `students`.`id` = $id");

    if($data){
        echo "Success";
        header("Location:data.php?msg=data updated successfully");
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
    <title>Student Crud</title>
</head>

<body>
    <?php $result = mysqli_query($con,"SELECT * from students WHERE id = $id LIMIT 1");
        $row = mysqli_fetch_assoc($result);
    ?>
    <form action="" method="post">
        <input type="text" name="name" id="" value="<?php echo $row['name']?>">
        <br />
        <input type="text" name="email" id="" value="<?php echo $row['email']?>">
        <br />
        <input type="number" name="age" id="" value="<?php echo $row['age']?>">
        <br />
        <input type="submit" value="Update" name="submit" id="">
    </form>
</body>

</html>