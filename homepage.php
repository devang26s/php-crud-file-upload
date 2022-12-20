
<?php

    include 'php/connection.php';
session_start();
    // $sql = "SELECT username FROM login";
    // $name = $_GET['username'];
    // setcookie("name",'$name');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function validate() {
      event.preventDefault();
      isSelected = false;
      var name = document.getElementById("InputName").value;
      var pass = document.getElementById("InputPass").value;
      var email = document.getElementById("InputEmail").value;
      var phone = document.getElementById("phone").value;
      var gender = document.getElementById("dropd").value;
      var strUser = gender.options[gender.selectedIndex].value;

        var strUser1 = gender.options[gender.selectedIndex].text;
        if(strUser==0)
        {
        alert("Please select a user");
        }
        }

      
      document.getElementById("show").innerHTML =
          name +
          " || " +
          email + " || " +
          address +
          " || " +
          phone +
          " || " +
          pass;

          var lenght = pass.length;

      if (email == "" || name == "" || address == "" || phone == "" || pass == "" || lenght < 8) {
        alert("Please Check All Fields");
        console.log("Please enter all required fields \n ");
        return false;
      } else {
        return true;}
  </script>
<body>
    <!-- Right split -->
    <div class="split right">
        <h1 class="txt">Data Entry</h1>
        <?php
            if(isset($_SESSION["id"])){
                echo "Welcome " . $_SESSION["id"];
            }
            else{
                // echo "Welcome Guest"/;
                session_destroy();
                header("Location: index.php");
            }
        ?>

        <form onsubmit="return validate()" class="form" action="php\insert.php" method="post">
            
            <label>Name</label>                       
            <input type="text" name="name" id="InputName"/>
            <div></div>
            <div></div>

            <label>Password</label>                   
            <input type="password" name="password" id="InputPass"/>
            <div></div>
            <div></div>

            <label>Email</label>                     
            <input type="email" name="email" id="InputEmail"/>
            <div></div>
            <div></div>

            <label>Phone</label>                    
            <input type="number" name="phno" id="phone"/>
            <div></div>
            <div></div>

            <label>Gender</label>                   
            <select name="dropd" id="dropd">
                <option value="0">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="non-binary">Non Binary</option>
            </select>
            <div></div>
            <div></div>
            <tr>
            
            <label>Hobbies</label>
            <input name="chk[]" value="1" type="checkbox"><label>1</label>
            <input name="chk[]" value="2" type="checkbox"><label>2</label>
            <input name="chk[]" value="3" type="checkbox"><label>3</label>
            
            <div></div>
            <button type="submit">Submit</button> 
        </label>
        </form>
        <button><a href="php/logout.php">Logout</a></button>
    </div>


    <div class="split left txt">
        <h1>View Data</h1>
        <button type="button"><a href="php\read.php">see data</a></button>
        <form action="php\upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" value="Upload" name="submit"/>
        </form>
        <table border="1">
                        <thead>
                            <th>ID</th>
                            <th>File Name</th>
                        </thead>
                        <tbody>
                          <?php
                              $selectQuery = "SELECT * FROM `files`";
                              $squery = mysqli_query($conn, $selectQuery);
 
                              while (($result = mysqli_fetch_assoc($squery))) {
                          ?>
                          <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['files']; ?></td>
                          </tr>
                          <?php
                               }
                          ?>
                        </tbody>
                      </table> 
    </div>
</body>
</html>