<?php

// $_GET;
// $_POST;
// $_COOKIE;
// $_FILES;
// $_REQUEST;
// $_SESSION


//print_r($_SERVER);
echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

?>