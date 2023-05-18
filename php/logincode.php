<?php
include "./login.php";
echo 12345;
if (isset($_POST['user']) && isset($_POST['password'])){
    echo 1234;
    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $user=validate($_POST['user']);
    $password=validate($_POST['password']);

    if (empty($user)){
        header("Location : login.php?error=User Name is required");
        exit();
    }else if (empty($password)){
        header("Location : login.php?error=Password Name is required");
        exit();
    }else{
        echo 11234;
//        $query="SELECT * FROM user WHERE user_name='$user' AND password='$password'";
//        $result = $link->query($query);
//        echo $query;
//        if(mysqli_num_rows($result)){
//            echo 11234;
//        }
    }
}else{
    echo 123456;
    header("location:login.php?error");
    exit();
}
?>