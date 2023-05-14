<?php require_once 'database.php'?>
<?php require_once "./linkk/top_link.php"?>
<a href="addpost.php">Add uy</a>
<form method="post">
    <select name='type'>
        <option >Turini tanlang</option>
        <option value="ovqat">Ovqat</option>
        <option value="baliq">Baliq</option>
        <option value="ichimlik">Ichimlik</option>
        <option value="musqaymoq">Musqaymoq</option>
        <option value="desert">Desert</option>
    </select><br>
    <input type='text' name='headline' placeholder="Nomi" ><br>

    <input class="btn inpt" type="submit" value="Qidirish" ><br><br>
</form>
<?php

$link = mysqli_connect("localhost", "root", "")
or die("Serverga bog'lanmadi : " . mysqli_error($link));
mysqli_select_db($link, "mydish") or die("Bazaga bog'lanmadi");

$sarlavha="";
if ($_POST['headline']){
        $sarlavha=" and  headline='{$_POST['headline']}'";
}

$ovqat="ovqat";
$baliq="baliq";
$desert="desert";
$ichimlik="ichimlik";
$musqaymoq="musqaymoq";
//hona turiga qarab tekshirish
$turi="";
if(isset($_POST['type'])){
    if($_POST['type'] == $ovqat){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $baliq){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $ichimlik){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $musqaymoq){
        $turi="and type ='{$_POST['type']}'";
    }
    if($_POST['type'] == $desert){
        $turi="and type ='{$_POST['type']}'";
    }

}

//  MYSQlda ekranga qidirish oqrqali chiqarish
    $query = "SELECT * FROM addpost WHERE 1=1 ".$sarlavha.$turi;
echo $query;
    $result = mysqli_query($link, $query) or die("So'rov ishlamadi : " . mysqli_error($link));
/*echo 1;*/
    print "<table class='jadval' border=1><tr><th>Turi</th>
<th>Nomi</th><th>Tarkibi</th><th>Narxi</th><th>Rasim</th><th></th></tr>\n";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        print "<tr>";
        print "<td>{$line['type']}</td>";
        print "<td>{$line['headline']}</td>";
        print "<td>{$line['composition']}</td>";
        print "<td>{$line['price']}</td>";
        print "<td>{$line['photo']}</td>";
        print "<td><a  href='edit.php?id={$line['id']}'> yangilash</a></td>";
        print "<td><a  href='delete.php?id={$line['id']}'> o'chirish</a></td>";
        print "</tr>";
    }
    print "</table>\n";

    mysqli_free_result($result);
    mysqli_close($link);

    ?>
<?php require_once "./linkk/bottom_link.php"?>







