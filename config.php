<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="madhavbs";
    $conn=new mysqli($servername, $username, $password, $dbname,3306);
    if($conn->connect_error){
        die("connection fail".$conn->connect_error);
    }
    echo "";

?>