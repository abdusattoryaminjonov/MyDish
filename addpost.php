<?php
require_once 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">
    
  


  <title>MyDish</title>

 <link href="./main.82cfd66e.css" rel="stylesheet"></head>
 <link rel="stylesheet" href="./mystyle.css">

<body>

 <!-- Add your content of header -->
 <?php require('navbar.php');?>

 
<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contact</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p>
    </div>
    <div class="section-container-spacer">
      <?php if (empty($_POST)): ?>
        <form action="" class="reveal-content" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    
                <?php
                    echo "
                    
                      <label class='choosephoto' >
                        <input  type='file' name='photo' accept='image/*'>
                        Choose a Photo
                      </label>
                    <br>";
                    echo "<input type='number' name='type' placeholder='Type'><br>";
                    echo "<input type='text' name='headline' placeholder='Headline'><br>";
                    echo "<textarea class='form-control' rows='3' name='text' placeholder='Enter composition'></textarea>";
                    echo "<input type='number' name='price' placeholder='Price'>";
                ?>
                <input type="hidden" name="soni" value="3"><br>
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Create</button><br>
                </div>
            </div>
        </form>
        <?php

              endif;
              if (isset($_POST['submit'])) {
                  $photo=$_POST['photo'];
                  $type = $_POST['type'];
                  $headline = $_POST['headline'];
                  $text = $_POST['text'];
                  $price = $_POST['price'];
                  $upload='/photos/';
                  $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
                  $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
                  if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){
                      echo"File yuklandi.\n";
                  }else{
                      echo"File yuklanmadi!!!\n";
                  }
                  print_r($_FILES);
              $query = "INSERT INTO addpost(photo,headline, type,text,price,)
                  VALUES ('$uploadfilebazaga','$headline',$type,'text',$price,)";
                    echo $query;

                  $result = $link->query($query);
                  if ($result) echo "qo'shildi";
              }
        ?>
    </div>
  </div>
</div>


</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>
 <script type="text/javascript" src="./main.85741bff.js"></script>
</body>

</html>