<header class="">
    <?php session_start()?>
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.php" class="navbar-brand">MyDish</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.php" title="">
            <img class="logo1" alt="" src="./assets/images/mashup-logo.jpg">
            MyDish
          </a>
        <p></p>
      </div>
      <ul class="nav">
        <li><a href="./index.php" class="menu_hover" title=""><img  src="./assets/navbar_icon/hous.svg"></a></li>
        <li><a href="./fulldata.php" class="menu_hover" title=""><img  src="./assets/navbar_icon/search.svg"></a></li>
        <li><a href="./addpost.php" class="menu_add" title=""><img src="./assets/navbar_icon/addpost.svg"></a></li>
        <li><a href="./components.php" class="menu_hover" title=""><img src="./assets/navbar_icon/chat.svg"></a></li>
          <?php
          echo"
          <li><a href='user.php?id={$_SESSION['id']}' class='menu_hover'><img src='./assets/navbar_icon/user.svg'></a></li>
          ";
         ?>
      </ul>

      <nav class="nav-footer">
        <a href="./logout.php" class="menu_hover" title=""><img src="./assets/navbar_icon/log_out.svg"></a>
          <br>
          <br>
        <p><a href="#">ABOUT</a></p>
      </nav>  
    </div> 
  </nav>
</header>
<main class="" id="main-collapse">