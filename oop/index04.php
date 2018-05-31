<?php

abstract class SinhVien{
    public $name;
    public $age;

    abstract function setName($name);

    abstract function setName2();

    function setAge($age){
        $this->age= $age;
    }
}
class Hocsinh extends Sinhvien{
    
    function setName($name){
        $this->name = $name;
    }
    function setName2($name = 'Teo'){
        $this->name = $name;
    }
    function setAge($age){
        $this->age= $age;
    }

    function a(){
        return 'a';
    }
}

$hs = new Hocsinh;
$hs->setName2('Ti');
echo $hs->name;
echo $hs->a();


?>