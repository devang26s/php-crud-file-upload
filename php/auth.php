<?php 

session_start(); 

// setcookie("name", $_POST['name'], time() + (86400 * 30), "/"); // 86400 = 1 day

include "connection.php";

if (isset($_POST['name']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $name = validate($_POST['name']);

    $pass = validate($_POST['pass']);

    if (empty($name)) {

        header("Location: ../index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: ../index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `login` WHERE username='$name' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $name && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                header("Location: ../homepage.php");

                exit();

            }else{

                header("Location: ../index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: ../index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: ../index.php");

    exit();

}