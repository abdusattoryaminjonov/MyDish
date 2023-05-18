<?php
session_start();
require_once "./login.php";
if (isset($_POST['user']) && isset($_POST['password'])){
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
        $query="SELECT * FROM user WHERE user_name='$user' AND password='$password'";
        $result = $link->query($query);
        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if ($row['user_name']===$user && $row['password']===$password){
                $_SESSION['user_name']=$row['user_name'];
                $_SESSION['password']=$row['password'];
                $_SESSION['photo']=$row['photo'];
                $_SESSION['bio']=$row['bio'];
                $_SESSION['phonenumber']=$row['phonenumber'];
                $_SESSION['id']=$row['id'];
                header("Location:index.php");
                exit();
            }else{
                header("Location : login.php?error=Incorect User_Name or password");
                exit();
            }
        }else{
            header("Location : login.php?error=Incorect User_Name or password");
            exit();
        }
    }
}else{
    echo 123456;
    header("location:login.php?error");
    exit();
}
?>