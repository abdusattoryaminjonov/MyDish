<?php require_once 'database.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body class="background1">


<form  action="logincode.php" method="post">
    <div class="login1" >
        <div class="login2">
            <a href="login.php">
                <img  src="./assets/images/mashup-logo.jpg">
            </a>
            <h1>LOG IN</h1>
            <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            <div>
                <input class="inputlogin" type="text" name="user">
                <p >User </p><br>
            </div>
            <div>
                <input class="inputlogin" type="password" name="password">
                <p>Password</p><br>
            </div>
            <input class="inputok" type="submit" value="ok">
            <a class="aclas" href="registor.php" >Parolni tiklash</a>
            <a class="aclas" href="registor.php" >Register</a>
        </div>
    </div>
</form>


</body>
</html>


