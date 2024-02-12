<?php
    $servername = "localhost";
    $username = "timo";
    $password = "root";
    $dbname = "linssen";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    echo"";
?>  

