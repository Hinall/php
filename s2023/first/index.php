<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php</title>
    <link rel="stylesheet" href="styles.css"></link>
</head>
<body>
    <form action="p" method="post">
        Name
        <input type="text" name="name"><br>
        Age:
        <input type="text" name="age">  
        <input type="submit">   
    </form>
</body>
</html>

<?php
    $server="localhost";
    $user="root";
    $pswd="";
    $db="mydatabase";

    $conn= new mysqli($server,$user,$pswd,$db);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    else{
        echo "connection successfyl";
    }

    // $name=$_POST['name'];
    // $age=$_POST['age'];
    // echo $name;
    // echo $age;
    // $sql="insert into myda";

?>