<?php require_once "./linkk/top_link.php"?>
<?php require_once 'database.php'?>

<?php require_once 'navbar.php'?>
<?php session_start()?>




<?php
$link = mysqli_connect("localhost", "root", "")
or die("Serverga bog'lanmadi : " . mysqli_error($link));
mysqli_select_db($link, "mydish") or die("Bazaga bog'lanmadi");

$query = "SELECT * FROM addpost order by user_id={$_SESSION['id']}";
$result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
echo "<div class='search_posts1'>";
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo"
            
                <div class='userpost'>
                    <img src='{$line['photo']}'>
                    <h4>{$line['headline']}</h4>
                    <p>{$line['type']}</p>
                    <h5 >{$line['price']} so'm</h5>
                    <a href='about_post.php?id={$line['id']}' style='text-decoration: none'>Tayyorlash</a>
                </div>
        ";
}
echo "</div>";
mysqli_free_result($result);
mysqli_close($link);

?>
</body>
</html>
