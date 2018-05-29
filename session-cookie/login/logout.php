<?php
session_start();
session_destroy();
setcookie('email','',time()-120);
setcookie('pw','',time()-120);
//session_unset();
//print_r($_COOKIE);
header('Location: login.php');
?>