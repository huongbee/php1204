<?php

//echo $_POST['image'];
// echo "<pre>";
// print_r($_FILES);
// print_r($_FILES['image'])

$image1 = $_FILES['image'];

$name = rand(1211234,12345678909).time().$image1['name'];
move_uploaded_file($image1['tmp_name'],'images/'.$name);
echo 12345;


/*
kiem tra file size <= 2MB 2*1024*1024
kiem tra loai file  (png, jpg, gif, jpeg) ko phan biet hoa - thuong
rename file
*/

/**
 * upload multi
 */

?>
