<?php

//echo $_POST['image'];
// echo "<pre>";
// print_r($_FILES);
// print_r($_FILES['image'])

$image1 = $_FILES['image'];

$name = rand(1211234,12345678909).time().$image1['name'];
move_uploaded_file($image1['tmp_name'],'images/'.$name);
echo 12345;


?>
