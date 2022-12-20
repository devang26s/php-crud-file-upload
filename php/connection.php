<?php
    $sname= "localhost";
    $uname= "root";
    $password = "";
    $db_name = "user_info";
    $conn = new mysqli($sname, $uname, $password, $db_name);
    if (!$conn){
        echo "Connection failed!";
    }
?>