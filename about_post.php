<?php require_once "./linkk/top_link.php"?>
<?php require_once 'database.php'?>

<?php require_once 'navbar.php'?>

<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM addpost WHERE id=$id");
echo "<div class='search_bolim'>";
    while ($request = mysqli_fetch_array($result)) {
       echo "
       
       <div class='p_r'>
    <div class='p_img'>
        <img src='{$request['photo']}'>
    </div>
    <div class='p_s'>
        <h2 >{$request['headline']}</h2>
        <h3 >{$request['price']}</h3>
        <h4>{$request['type']}</h4>
        <p >{$request['composition']}</p>
        <a href='contact.php'  >Bog'lanish</a>
    </div>
</div>
       
       
       
       ";
}
    
    echo "</div>";
}
?>
</body>
</html>