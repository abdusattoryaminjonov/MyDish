<?php require_once 'database.php'?>
<?php require_once "./linkk/top_link.php"?>
<?php require('navbar.php');?>

 
<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Post qo'shish</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. <br>Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.</p>
    </div>
    <div class="section-container-spacer">
      <?php if (empty($_POST)): ?>
        <form method="post" class="reveal-content" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    
                <?php
                    echo "
                    
                      <label class='choosephoto' onclick='click' >
                        <input  type='file' name='photo' accept='image/*'>
                        Rasim qo'shish
                      </label>
                    <br>";
                    echo "
                        <select name='type'>
                            <option >Turini tanlang</option>
                            <option value='ovqat'>Ovqat</option>
                            <option value='disert'>Disert</option>
                            <option value='ichimlik'>Ichimlik</option>
                         </select><br>
                         ";
                    echo "<input type='text' name='headline' placeholder='Headline'><br>";
                    echo "<textarea class='form-control' rows='3' name='text' placeholder='Enter composition'></textarea>";
                    echo "<input type='number' name='price' placeholder='Price'><br>";
                ?>
                    <input type="hidden" name="soni" value="5">
                    <input type="submit" value="Qo'shish" name="submit"><br><br>
                </div>
            </div>
        </form>
        <?php

              endif;
              if (isset($_POST['submit'])) {
                  $type = $_POST['type'];
                  $headline = $_POST['headline'];
                  $text = $_POST['text'];
                  $price = $_POST['price'];
                  $upload='/photos/';
                  $uploadfile=__DIR__.$upload .basename($_FILES['photo']['name']);
                  $uploadfilebazaga=$upload .basename($_FILES['photo']['name']);
                  if(move_uploaded_file($_FILES['photo']['tmp_name'],$uploadfile)){
                      echo"
                      ";
                  }else{
                      echo"File yuklanmadi!!!\n";
                  }
                  //print_r($_FILES);
                  $query = "INSERT INTO addpost(photo,headline,type,composition,price)
                  VALUES ('$uploadfilebazaga','$headline','$type','$text',$price)";
                    //echo $query;

                  $result = $link->query($query);
                  header("location: index.php");
              }
        ?>
    </div>
  </div>
</div>


</main>

<?php require_once "./linkk/bottom_link.php"?>