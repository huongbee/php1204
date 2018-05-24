<?php

$file = $_FILES['image'];

//print_r($file);

//file size
foreach($file['size'] as $size){
    if($size >= 2*1024*1024){
        die("File quá lớn");
    }
}
// file type
$arrExt = ['png', 'jng','gif'];
foreach($file['name'] as $name){
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    if(!in_array($ext,$arrExt)){
        die("File không được phép chọn");        
    }
}

// foreach($file['tmp_name'] as $key => $tmpName){
//     $newName = date('Y-m-d-H-i-s').'-'.$file['name'][$key];
//     move_uploaded_file($tmpName, "images/$newName");
// }

foreach($file['name'] as $key=>$name){
    $newName = date('Y-m-d-H-i-s').'-'.$name;
    $tmpName = $file['tmp_name'][$key];
    move_uploaded_file($tmpName, "images/$newName");
    
}
echo 'success';

//


?>