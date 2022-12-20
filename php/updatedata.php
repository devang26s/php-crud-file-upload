<?php
    include 'connection.php';
    echo $_GET['id'];
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE `info` SET `name`= '".$_POST['name']."' WHERE `ID` =  '".$_GET['id']."'");
    $message = "Record Modified Successfully";
    echo $_GET['id'];
    }
    $result = mysqli_query($conn,"SELECT * FROM `info` WHERE `ID` =  '".$_GET['id']."'");
    $row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update Employee Data</title>
    </head>
    <body>
        <form name="frmUser" method="post" action="">
        <div><?php if(isset($message)) { echo $message; } ?>
        </div>
        <!-- <div style="padding-bottom:5px;"> -->
        <!-- <a href="retrieve.php">Employee List</a> -->
        <!-- </div> -->
        Name: <br>
        <input type="hidden" name="name" class="txtField" value="<?php echo $row['name']; ?>">
        <input type="text" name="name"  value="<?php echo $row['name']; ?>">
        <br>

        <input type="submit" name="submit" value="Submit" class="buttom">

        </form>
        <button><a href="read.php">Go Back</a></button>
    </body>
</html>