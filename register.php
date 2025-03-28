<?php
    include("config.php"); 
    if (isset($_POST['submit']))
    { 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `users` (`rno`, `username`, `password`) VALUES (NULL, '$username', '$password')";
        $execute=mysqli_query($conn,$sql);
        echo "<script> alert ('REGISTRATION SUCCESSFUL');
        window.location.href = 'welcome.php';</script>";
    }
  ?>  
 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!--navbar -->
<nav class="navbar">
    <ul>
    <a  href="login.php"> <b> WELCOME TO HOME PAGE </b> </a> 
    </ul>
</nav>

    
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

<script>
    function isvalid()
    {
        var username = document.form.username.value;
        var password = document.form.password.value;
        if(username.length=="" && password.length=="")
        {
        alert("username and password field is empty! please check");
        return false;
        } 
        else if(username.length==""){
            alert("username field is empty");
            return false;
        }
        else if(password.length==""){
        alert("password field is empty");
        return false;
        }
    }
</script>
</body>
</html> 