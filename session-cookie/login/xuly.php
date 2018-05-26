<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if($email == 'admin@gmail.com' && $password==111111){
    //tao session
    $_SESSION['email'] = $email;
    $_SESSION['pw'] = $password;

    header("Location:home.php");
    
}
else{
    $_SESSION['error'] = "Sai thông tin đăng nhập";
    header("Location:login.php");
    return;
}





?>