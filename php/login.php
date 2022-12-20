<?php
    session_start();
    include 'connection.php';
    $message="";
    if(count($_POST)>0) {
        // $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
        $result = mysqli_query($conn,"SELECT * FROM `login` WHERE username='" . $_POST['name'] . "' and password = '". $_POST['pass']."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['username'];
        $_SESSION["name"] = $row['password'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location: ../homepage.php");
    }
?>