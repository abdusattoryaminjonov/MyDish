<?php require_once 'database.php'?>
<?php require_once "./linkk/top_link.php"?>
<?php require_once "navbar.php"?>
<div class="search_bolim">
    <form method="post" enctype="multipart/form-data">
        <div class="search_buttom">
            <select name='type'>
                <option >Turini tanlang</option>
                <option value="ovqat">Ovqat</option>
                <option value="fastFood">Fastfood</option>
                <option value="ichimlik">Ichimlik</option>
                <option value="muzqaymoq">Musqaymoq</option>
                <option value="dessert">Desert</option>
                <option value="snack">Snack</option>
            </select><br>
            <input type='text' name='headline' placeholder="Nomi" ><br>
            <div class="search_buttom1">
            <input class="btn inpt" type="submit" value="Qidirish" ><br><br>
            </div>
        </div>
    </form>
<?php

$link = mysqli_connect("localhost", "root", "")
or die("Serverga bog'lanmadi : " . mysqli_error($link));
mysqli_select_db($link, "mydish") or die("Bazaga bog'lanmadi");

$sarlavha="";
if ($_POST['headline']){
        $sarlavha=" and  headline like '%{$_POST['headline']}%'";
}

$ovqat="ovqat";
$fastfood="fastFood";
$desert="dessert";
$ichimlik="ichimlik";
$muzqaymoq="muzqaymoq";
$snack="snack";
//hona turiga qarab tekshirish
$turi="";
if(isset($_POST['type'])){
    if($_POST['type'] == $ovqat){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $fastfood){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $ichimlik){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $muzqaymoq){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $desert){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $snack){
        $turi="and type ='{$_POST['type']}'";
    }

}

//  MYSQlda ekranga qidirish oqrqali chiqarish
    $query = "SELECT * FROM addpost WHERE 1=1 ".$sarlavha.$turi;
    $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
    echo "<div class='search_posts'>";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo"
            <div class='search_posts'>  
                <div class='userpost'>
                    <img src='{$line['photo']}'>
                    <h4>{$line['headline']}</h4>
                    <p>{$line['type']}</p>
                    <h5 >{$line['price']} so'm</h5>
                    <a href='about_post.php?id={$line['id']}'  style='text-decoration: none'>Tayyorlash</a>
                </div>
            </div>
        ";
    }
    echo "</div>";
    mysqli_free_result($result);
    mysqli_close($link);

    ?>

</div>
<?php require_once "./linkk/bottom_link.php"?>







