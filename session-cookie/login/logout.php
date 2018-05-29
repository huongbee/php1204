<?php
session_start();
session_destroy();
setcookie('email','',time()-120);
setcookie('pw','',time()-120);

header('Location: login.php');
?>