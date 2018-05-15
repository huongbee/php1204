
<?php

$start = 50;
$end = 100;
echo " Day cac so nguyen to tu $start - $end la : ";
for($start; $start<= $end; $start++){
    //5

    $flag = false;
    for($j = 2; $j < sqrt($start); $j++){
        if($start % $j == 0){
            $flag = true;
            break;
        }  
    }
    if(!$flag) echo $start. ' ';
}



//5 7 11 13 17 19 23  ... 91 97
//in ra day cac so nguyen to trong khoang 2->100

// Day cac so nguyen to tu 2 - 100 la : ........
?>