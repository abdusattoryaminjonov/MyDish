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
  <link href="./mystyle.css" rel="stylesheet">
  


  <title>Sarlavha</title>  

<link href="./main.82cfd66e.css" rel="stylesheet"></head>

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
        <form action="" class="reveal-content">
            <div class="row">
                <div class="col-md-6">
                    
                <?php
                    echo "
                    <div class='choosephoto'>
                        <input  type='file' name='photo' accept='image/*'>
                        <label  for='file'>Choose a Photo</label>
                    </div>
                    ";
                    echo "<input type='file' name='photo' ><br>";
                    echo "<input type='number' name='type' placeholder='Type'><br>";
                    echo "<input type='text' name='headline' placeholder='Headline'><br>";
                    echo "<textarea class='form-control' rows='3' placeholder='Enter composition'></textarea>";
                    echo "<input type='number' name='price' placeholder='Price'>";
                ?>
                <input type="hidden" name="soni" value="3"><br>
                <button type="submit" class="btn btn-primary btn-lg">Create</button><br>
                </div>
            </div>
        </form>
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

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="./main.85741bff.js"></script></body>

</html>