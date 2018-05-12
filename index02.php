<?php

// $a = 4;
// $b = 1;
// $c = $a+$b;
// echo "Tổng của $a + $b = $c";
// echo "<br>";
// echo 'Tổng của $a + $b = '.($a+$b);


// $a = 4;
// $a+=1; //$a = $a + 1;
// echo $a; //5 

// $b = 3;
// $a+=$b;
// echo $a; //8

// define('PI',3.14);
// echo PI;


$a = 2;
$b = 2;
$c = 2;
if($a+$b > $c && $a+$c>$b && $b+$c>$a){
    //la tam giac
    if( pow($a,2)+$b*$b == pow($c,2) || 
        pow($a,2)+pow($c,2) == pow($b,2) || 
        pow($b,2)+pow($c,2) == pow($a,2)
    ){
        echo "Tam giac vuong";
    }
    elseif($a == $b && $a == $c){
        echo "tam giac deu";
    }
    elseif( $a== $b || $a==$c || $c==$b){
        echo "Tam giac can";
    }
    else echo 'Tam giac thuong';
}
else{
    echo "khong phai tam giac";
}



// if(!(0>1)){
//     echo "đúng";
// }
// else echo "sai";


?>