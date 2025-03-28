<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<div id="form">
        <h1> Registration form </h1>
        <form name="form" action="register.php" onsubmit="return isvalid()" method="POST">
        <label> Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter your username"> <br> <br>
        <label> Password: </label>
        <input type="password" name="password" id="password" placeholder="Enter your password"> <br> <br>
        <input type="submit" id="btn" value="register" name = "submit"/> <br> <br>
</form>
</div>
</body>
</html>

<?php

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname="madhavbs";
     $conn=new mysqli($servername, $username, $password, $dbname,3306);
     if($conn->connect_error){
         die("connection fail".$conn->connect_error);
     }

     
    if (isset($_POST['submit']))
    { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql= "INSERT INTO `users` (`rno`, `username`, `password`) VALUES (NULL, '$username', '$password')";
    $execute=mysqli_query($conn,$sql);
    echo "registration successful";
    $conn->close();
    }
?>