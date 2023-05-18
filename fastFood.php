<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="Page description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <link href="./mystyle.css" rel="stylesheet">


    <title>New Project from Abdusattor</title>

    <link href="./main.82cfd66e.css" rel="stylesheet"></head>

<body>

<!-- Add your content of header -->
<?php require('navbar.php');?>
<!-- Add your site or app content here -->
<?php
$link = mysqli_connect("localhost", "root", "")
or die("Serverga bog'lanmadi : " . mysqli_error($link));
mysqli_select_db($link, "mydish") or die("Bazaga bog'lanmadi");

$ovqat="fastFood";

$query = "SELECT * FROM addpost WHERE type='$ovqat'";
$result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
echo "<div class='menu_food'>";
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

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        masonryBuild();
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        navbarToggleSidebar();
        navActivePage();
    });
</script>

<script type="text/javascript" src="./main.85741bff.js"></script>

</body>
</html>
