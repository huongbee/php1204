<?php


// function inCauChao($name, $age=1){
//     return "Chao ban ".$name. ', '.$age ." tuoi";
// }

// echo inCauChao("Ti",3);

// function cong($a = 1){
//     return $a+1;
// }
// echo cong(2);

//viet function kiem tra SNT, co 1 tham so => return boolean 
//viet function in SNT, 2 tham so : start, end => echo ....


function checkSNT($num){
    for($i=2; $i<$num; $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}

// $check = checkSNT(8);
// var_dump($check);
function inSNT($start, $end){
    if($start == 1)
        $start = 2;
        
    $result = "Day cac so ngto la: ";
    for($start; $start<=$end; $start++){
        if(checkSNT($start)){
            $result .= $start.' ';
        }
    }
    return $result;
}
echo inSNT(10,100);



?>