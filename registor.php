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
<body class="regBody">
<form method="post">
    <div class="registorDiv">
        <div class="login2">
            <?php
            echo "
            <label class='choosephoto ' onclick='click' >
               <img class='hajmi' src='./assets/images/photo11.ico'>
               <input  type='file' name='photo' accept='image/*'>
               Rasm qo'shish
            </label>";

            echo "
            <div>
                <input class='inputlogin' type='text' name='username'>
                <p>To'liq ism</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='tel' name='username'>
                <p>Tel nomer(991234567)</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='password' name='password' >
                <p>Parol kiriting</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='password' name='password' >
                <p>Parolni tasdiqlang</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='text' name='bio' >
                <p>Bio(recommended)</p>
            </div>";
            ?>

            <input class="inputQoshish" type="submit" value="Qo'shish" name="submit"><br><br>

        </div>
    </div>
</form>

    
</body>
</html>