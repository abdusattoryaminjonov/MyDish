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
<?php if (empty($_POST)): ?>
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
                <input class='inputlogin' type='tel' name='phonenumber'>
                <p>Tel nomer(991234567)</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='password' name='password' >
                <p>Parol kiriting</p>
            </div>";
            echo "
            <div>
                <input class='inputlogin' type='password'  >
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
<?php
              endif;
              if (isset($_POST['submit'])) {
                  $user_name=$_POST['username'];
                  $password=$_POST['password'];
                  $phonenumber=$_POST['phonenumber'];
                  $bio = $_POST['bio'];
                  $upload='/User_photos/';
                  $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
                  $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
                  if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){
                  }else{
                      echo"File yuklanmadi!!!\n";
                  }
                  //print_r($_FILES);
                  $query = "INSERT INTO user(photo,user_name,password,bio,phonenumber)
                  VALUES ('$uploadfilebazaga','$user_name','$password','$bio','$phonenumber')";
                    //echo $query;

                  $result = $link->query($query);
                  header("location: login.php");
              }
        ?>

    
</body>
</html>