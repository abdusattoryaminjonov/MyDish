<?php require_once "./linkk/top_link.php"?>
<?php require_once 'navbar.php'?>
<body class="row1" >
    <div class="row hero">
    <div class="userpage" >
        <h1 style="text-align: center">User</h1>
        <?php
        echo "
        <div class='user_colum'>
            <img src='{$_SESSION['photo']}' id='profile-pic'>
            <label for='input-file'>upload</label>
            <input type='file' accept='image/jpeg , image/png, image/jpg' id='input-file'>
        </div>
        <div>
            <h3>{$_SESSION['user_name']}</h3>
            <p>{$_SESSION['bio']}</p>
        </div>
        ";
        ?>
        <hr>
        <div class="postmenu">
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
        </div>

    </div>

</div>

<script>

    let profilePic=document.getElementById("profile-pic");
    let inputFile=document.getElementById("input-file");
    inputFile.onchange=function (){
        profilePic.src=URL.createObjectURL(inputFile.files[0]);
    }

</script>
</body>
<?php require_once "./linkk/bottom_link.php"?>