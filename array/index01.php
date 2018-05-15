<?php

$arr = array(1,2,3,5);

// echo $arr[3];
// die;


$arr2 = array(
    'key1'=>'value1',
    'key2'=>212 ,
    '12345',
    $arr
);
//c1
$t = $arr2[1];
echo $t[3];

//c2
echo $arr2[1][3];

echo "<pre>";
print_r($arr2);
die;



$arr3 = [
    12 => 45,
    13 => 46,
    'key' => 47
];

echo "<pre>";
print_r($arr2);
print_r($arr3);

echo "</pre>";

// echo $arr3[12];
// echo $arr3[13];
// echo $arr3['key'];
?>

<input type="text" value="<?php echo $arr2['key1']?>">
<input type="text" value="<?=$arr2['key2']?>">



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>