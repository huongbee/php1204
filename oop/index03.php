<?php

class Sinhvien{
    public static $name = 'Ti';

    function setName($name){
        self::$name = $name;
    }
    static function getname(){
        //return self::$name;
        return Sinhvien::$name;
    }
    function getName2(){
        //echo $this->getname(); //sai
        echo self::getname();
    }
}
$sv1 = new Sinhvien;
$sv1->setName('Teo');
echo $sv1->getName(); //Teo

$sv2 = new Sinhvien;
echo $sv2->getName(); // Teo

// $sv = new Sinhvien;
// echo $sv->getname();

// echo Sinhvien::getname();

// function cong(&$a){
//     return $a+=1; 
// }
// $a = 2;
// echo cong($a); // 3
// echo $a; // 2 //3
?>
