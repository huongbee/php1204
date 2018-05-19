<?php

$str = "ththt  Thơ tiêu biểu của thơ cách mạng Việt Nam Thơ";

// $search = "thơ";
// $position = stripos($str,$search); //left 
// $position = strpos($str,$search); //left : co phan biet hoa thuong

// $position = strripos($str,$search); //right
// $position = strrpos($str,$search); //right: co phan biet hoa thuong

// echo $position;


$name = "khoa pham";

// $name = ucwords($name); // Khoa Pham
// $name = strtoupper($name); //KHOA PHAM
// $name = strtolower($name); //khoa pham

// echo $name;
$str = "con cò bé bé";

$count = 0;
$str = str_replace("cò", "mèo", $str, $count);
// echo $str;
// echo $count; //so lan bi replace

// y-m-d // 2018-03-20 -> 20/03/2018
// 
// echo "<pre>";
// echo date_default_timezone_get();

date_default_timezone_set('Asia/Ho_Chi_Minh');

// echo date_default_timezone_get();

// $date = getdate();
// print_r($date);
// echo time();


// echo date('w l j d/M/Y H:i:s');
// echo "<br>";
// echo date('w l j d/M/Y h:i:s a');

$day = "2018-02-12 3:40:30";
$ts = strtotime($day);
echo date('d/m/Y H:i:s',$ts);


?>