<?php
echo "<pre>";
class Sinhvien{
    
    var $name = 'not set'; // thuoc tinh - property
    var $age = 0;

    function __construct($name1){
        echo $name1;
        // echo __CLASS__.' được khởi tạo. ';
        // echo __FUNCTION__ ." được gọi";
    }

    function setName($ten){ //hanh dong // verb
        $this->name = $ten;
    }
    function getName(){
        return $this->name;
    }
    function setAge($age){ //hanh dong // verb
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }

    function getInfor($name, $age){
        $this->setName($name);
        $this->setAge($age);
        return "Sinh vien ".$this->name." co tuoi la: ".$this->age;
    }
}


$sv1 = new Sinhvien('huonghuong huong');

//$sv1->__construct('huong');// sai 

//echo $sv1->getInfor('Ti', 12);

//$sv2 = new Sinhvien;

// $sv1->setName('Teo');
// echo $sv1->getName();

// $sv1->name = 'Ti';
// $sv1->age = 21;

//echo $sv1->name;

//var_dump($sv1);
// var_dump($sv2);

// if($sv1 === $sv2){
//     echo "yes";
// }
// else echo 'no';

?>