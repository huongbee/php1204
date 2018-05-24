<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$file = $_FILES['image'];
//print_r($file);
if($file['error']==0){
    
    //file size
    if($file['size']<= 2*1024*1024){
        //file type
        $arrExt = ['png','jpg','gif','jpeg'];
        $ext = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
        
        if(in_array($ext,$arrExt)){
            //rename
            $newName = date('Y-m-d-H-i-s').'-'.rand(12345,123456543).'-'.$file['name'];
             //a.png  2018-5-24-20-10-30-1234534-a.png
             move_uploaded_file($file['tmp_name'],"images/$newName");
             echo "success";
        }
        else{
            echo "File không được phép chọn";
        }
        
    }
    else{
        echo "file quá lớn";
    }
    
}
else{
    echo "Vui long chon file";
}


?>