<<?php
    include 'connection.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phno'];
    $gen = $_POST['dropd'];
    $hob = $_POST['chk'];
    $chb = "";
    foreach($hob as $chb1){
        $chb .= $chb1.",";
    }
    // Insert part
    $sql1 = "INSERT INTO `info`(`name`, `pass`, `email`, `phone`, `hobbies`, `gender`, `id`) VALUES ('$name','$pass','$email','$phone','$chb','$gen','$id')";
    
    if(mysqli_query($conn,$sql1)){
        // echo "<script>Data Inserted</script>";
        header("Location: ../homepage.php");
    }
    else{
        echo "Data Not Inserted";
    }
?>