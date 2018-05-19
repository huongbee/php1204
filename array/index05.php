<?php
$arr = [
    'php',
    'ios',
    'nodejs'

];
// array_shift($arr);
// array_push($arr,"mean");

array_splice($arr,2,1,['front end','android']);

print_r($arr);

?>