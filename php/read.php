<?php

          $sname= "localhost";
          $uname= "root";
          $password = "";
          $db_name = "user_info";
          $conn = new mysqli($sname, $uname, $password, $db_name);
          if (!$conn) {
            echo "Connection failed!";
          }
?>
<html>
    <head>
        <title>My First Web Page</title></head>
        <body>
<h2>See Data Here</h2>
        <?php
            

            $sql = "SELECT * FROM `info`";
            $result = $conn->query($sql);
        ?>
        <h5>Table</h5>
        <table border=1>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Hobbies</th>
                <th>Gender</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>

            <?php
            while ($rows = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $rows['ID'] ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['pass']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['phone']; ?></td>
                <td><?php echo $rows['hobbies'] ?></td>
                <td><?php echo $rows['gender'] ?></td>
                <td><a href="delete.php?id=<?php echo $rows['ID']; ?>">delete</a></td>
                <td><a href="updatedata.php?id=<?php echo $rows['ID']; ?>">update</a></td>
            </tr>
            <?php
                }
            ?>
</table>
<button><a href="../homepage.php">Go Back</a></button>
        </body>
</html>