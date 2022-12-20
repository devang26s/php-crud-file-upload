<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .box {
        width: 50%;
        height: 100%;
        border: 1px solid black;
        padding: 10px;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: auto;
        align-items: center;
        text-align: center;
    }
  </style>
  <script>
        function Validation(){
            var email = document.getElementById();
            var password = document.getElementById();

            var length = password.length;
            if (length <= 8){
                alert("Please enter password with more than 8 char");
            }else if(password == "" || email == ""){
                alert("Please enter password or password");
            }
        }
  </script>
<body>
    <div class="box">
    <form onsubmit="return Validation()" action="php/login.php" method="POST">
        <label>Enter Email</label>
        <input type="email" name="name" id="InputName"/>
        <div></div>
        <div></div>
        <label>Enter Password</label>
        <input type="password" name="pass" id="InputPass"/>
        <div></div>
        <input type="submit" value="Login"/>
    </form>
    </div>
</body>
</html>