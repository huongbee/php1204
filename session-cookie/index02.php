<?php
include 'index03.php';
// include 'index03.php1';
// include_once 'index03.php';

// require 'index03.php1';
// require_once '';
//echo $age;

session_start();
echo $_SESSION['name']; //exist

//unset($_SESSION['name']); //remove
unset($_SESSION['age']); //remove

//echo $_SESSION['name'];  // not exist


session_destroy(); // remove all

?>