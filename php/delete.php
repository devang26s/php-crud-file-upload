<?php
    include 'connection.php';
    echo $_GET['id'];
    $sql = "DELETE FROM `info` WHERE `ID` =  '".$_GET['id']."'";
    
    if(mysqli_query($conn,$sql)){
        // echo "<script>Data Inserted</script>";
        echo 'Data Deleted';
        header("Location: read.php  ");
    }
    else{
        echo "Data Not Inserted";
    }
?>