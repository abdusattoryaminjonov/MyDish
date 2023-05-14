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

<form method="post">
    <div class="login1" >
        <div class="login2">
            <a href="login.php">
                <img  src="./assets/images/mashup-logo.jpg">
            </a>
            <h1>LOG IN</h1>
            <div>
                <?php
                echo "<input class='inputlogin' type='text' name='user'>";?>
                <p >User </p><br>
            </div>
            <div>
                <?php echo "<input class='inputlogin' type='password' name='password'>";?>
                <p>Password</p><br>
            </div>
            <input class="inputok" type="submit" name="submit" value="ok">
            <a class="aclas" href="registor.php" >Register</a>
        </div>
    </div>
</form>

<?php


   /* if (isset($_POST['user'])){
    }

if (isset($_POST['submit'])){
//    echo '3333';
    $user=$_POST['user'];
    $password=$_POST['password'];
    $query = "SELECT * FROM user where username='{$user}' and password='{$password}'";
    $result = $link->query($query);
    //echo $result;
    if (mysqli_num_rows($result)!=0) {
        header( "Refresh:3; index.php", true, 303);
        */?><!--
         <h2>404 error</h2>
        --><?php
/*
    }else{
        header( "Refresh:3; login.php", true, 303);
    }
    //header("location: index.php");
}
*/?>

</body>
</html>


