<?php

class Sinhvien{

    public $name = 'name';
    protected $age = 1;
    private $id = 'abc';

    public function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;
    }
    function getId(){
        return $this->id;
    }

    
}

class Hocsinh extends Sinhvien{
    
}

$hs = new Hocsinh;
echo $hs->getId();
//echo $hs->getId();
//var_dump($hs);



// $sv = new Sinhvien;
// $sv->name = 'Teo';
// echo $sv->name;

// $sv->setAge(2);
// echo $sv->getAge();
//echo $sv->age;



?>