<?php
    include("config.php");
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "select * from users where username = '$username' and password ='$password'"); 
        $no = mysqli_num_rows($query);
        if ($no>0)
        {
            $data = mysqli_fetch_assoc($query);
            if($data['password']==$password)
            {
                echo "<script> alert ('LOGIN SUCCESS');
                window.location.href = 'dashboard.php';</script>";
            }
            
        }
            
    }

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<!--navbar -->
<nav class="navbar">
    <ul>
    <a  href="welcome.php"> <b>WELCOME TO LOGIN PAGE </b> </a> 
    </ul>
</nav>


<div id="form">
        <h1> login form </h1>
        <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
        <label> Username: </label>
        <input type="text" name="username" id="username" placeholder="Enter your username"> <br> <br>
        <label> Password: </label>
        <input type="password" name="password" id="password" placeholder="Enter your password"> <br> <br>
        <input type="submit" id="btn" value="login" name = "submit"/> <br> <br>
        <a href="register.php">  New Member? Sign Up </a> </li>
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