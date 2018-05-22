<?php

// echo isset($_GET['txtName']) ? $_GET['txtName'] : '';
// echo isset($_GET['age']) ? $_GET['age'] : 1;

 if(isset($_POST['txtName']) && $_POST['txtName'] != ''){
    echo $_POST['txtName'];
 } 
 else{

    $error = 'Vui long nhap ten';
    header('Location:index.php?error='.$error);
 }


?>