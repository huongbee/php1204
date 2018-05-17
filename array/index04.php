<?php
echo "<pre>";
// $str = "Hello classsA";

// $arr = explode(' ',$str);

// print_r($arr);

// $arr = array('Hello','classA');
// echo implode('---',$arr);


// $arr = ['PHP','Nodejs','Android', 'iOS', 'React'];
// $subject = 'iOS';

// $flag = false;
// foreach($arr as $s){
//     if($s == $subject){
//         $flag = true;
//         break;
//     }
// }
// echo $flag ? "Exist $subject" : "Not Exist $subject";
// if($flag){
//     echo "Exist $subject";
// }
// else {
//     echo "Not Exist $subject";   
// }

// if(in_array($subject,$arr))
//     echo "Exist $subject";
// else
//     echo "not Exist $subject";



$arrNum = [3,8,5,1,7,9,50];

for($i = 0 ; $i< count($arrNum); $i++){
    for($j=$i+1; $j< count($arrNum); $j++){
        if($arrNum[$i] > $arrNum[$j]){
            $t = $arrNum[$i];
            $arrNum[$i] = $arrNum[$j];
            $arrNum[$j] = $t;
        }
    }   
}
print_r($arrNum);

// $arrNum = [3,8,5,1,7,9,50];
// sort($arrNum);
// rsort($arrNum);
// print_r($arrNum);

$arr = [
    [
        'name'=>"Huong",
        'age'=> 20
    ],
    [
        'name'=>"Khoa",
        'age'=> 30
    ],
    [
        'name'=>"Student",
        'age'=> 24
    ],
    [
        'name'=>"Khoa",
        'age'=> 12
    ],
];

// for($i = 0; $i<count($arr); $i++){
//     for($j=$i+1 ; $j< count($arr); $j++){

//         if($arr[$i]['age'] < $arr[$j]['age']){
//             $t = $arr[$i];
//             $arr[$i] = $arr[$j];
//             $arr[$j] = $t;
//         }
//     }
// }
usort($arr,function($a,$b){
    return $b['age'] <=> $a['age'];
});
print_r($arr);
?>