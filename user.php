<?php require_once "./linkk/top_link.php"?>
<?php require_once 'navbar.php'?>
<body class="row1" >
    <div class="row hero">
    <div class="userpage" >
        <h1 style="text-align: center">User</h1>
        <div class="user_colum">
            <img src="photos/bmw-m4-wallpaper-3840x2400_9.jpg" id="profile-pic">
            <label for="input-file">upload</label>
            <input type="file" accept="image/jpeg , image/png, image/jpg" id="input-file">
        </div>
        <div>
            <h3>Akbarov Akbar</h3>
            <h4>Oshpaz</h4>
            <p>My hobby is cooking</p>
        </div>
        <hr>
        <div class="postmenu">
            <div class="userpost">
                <img src="assets/images/post_image3.png">
                <h4>Post headline</h4>
                <p>Pishiriq</p>
                <h5 >10$</h5>
                <a href="./html_page/about_post.html" style="text-decoration: none">Tayyorlash</a>
            </div>
            <div class="userpost">
                <img src="assets/images/post_image2.png">
                <h4>Post headline</h4>
                <p>Ovqat</p>
                <h5>50$</h5>
                <a href="./html_page/about_post.html" style="text-decoration: none">Tayyorlash</a>
            </div>
            <div class="userpost">
                <img src="assets/images/post_image1.png">
                <h4>Post headline</h4>
                <p>Ovqat</p>
                <h5>40$</h5>
                <a href="./html_page/about_post.html" style="text-decoration: none">Tayyorlash</a>
            </div>
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