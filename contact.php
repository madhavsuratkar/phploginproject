<?php
    include("config.php");
    
    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "select * from user where username = '$username'"); 
        $no = mysqli_num_rows($query);
        if ($no>0)
        {
            $data = mysqli_fetch_assoc($query);
            if($data['password']==$password)
            {
                echo "<script> alert ('LOGIN SUCCESS');
                window.location.href = 'welcome.php';</script>";
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
    <a  href="welcome.php"> <b> WELCOME TO HOME PAGE  </b> </a> 
    </ul>
</nav>
<p class="text-center"> <b> Contact Us: </b> </p>
<p class="text-center"> Email: madhavsuratkar@gmail.com </p>
</body>
</html>  