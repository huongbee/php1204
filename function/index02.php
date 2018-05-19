<?php

function cong(&$a){
    return $a+=2;
}

$b = 5;
$c = cong($b);

// echo $b; //7
// echo $c; //7


$arr = [2,4,5,6,9,6,4,20,4];

$count = 0;
function countNumExist($array,$num, &$count = 0){
    foreach($array as $n){
        if($n == $num){
            $count++;
        }
    }
}
countNumExist($arr,6,$count);
echo $count;

function countNumExist2($array,$num){
    $count = 0;
    foreach($array as $n){
        if($n == $num){
            $count++;
        }
    }
    return $count;
}
echo countNumExist2($arr,6);

?>