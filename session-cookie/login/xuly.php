<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if($email == 'admin@gmail.com' && $password==111111){
    //tao session
    $_SESSION['email'] = $email;
    $_SESSION['pw'] = $password;

    if(isset($_POST['remember']) && $_POST['remember']==1 || $_POST['remember']=="on"){
        setcookie('email',$email, time()+120);
        setcookie('pw',$password, time()+120); // md5()
    }

    header("Location:home.php");
    
}
else{
    $_SESSION['error'] = "Sai thông tin đăng nhập";
    header("Location:login.php");
    return;
}





?>