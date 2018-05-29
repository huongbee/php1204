<?php
session_start();
if(!isset($_SESSION['email']) || !isset($_SESSION['pw']) || $_SESSION['email'] != 'admin@gmail.com' || $_SESSION['pw'] != '111111'){
    if(isset($_COOKIE['email']) && $_COOKIE['email']=='admin@gmail.com' && isset($_COOKIE['pw']) && $_COOKIE['pw']=='111111'){
        $_SESSION['email'] = $_COOKIE['email'];
        $_SESSION['pw'] = $_COOKIE['pw'];
        echo "using cookie";
    }
    else{
        $_SESSION['error'] = "Vui lòng đăng nhập";    
        header("Location:login.php");
        return;
    }   
}
else{
    echo "using session";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h3>This is home page</h3>
    <div>Hello <?=$_SESSION['email']?></div>
    <div><a href="logout.php">Logout</a></div>
</body>
</html>