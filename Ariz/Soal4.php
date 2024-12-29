<?php
class Person{
    public $name,$age;

    function perkenalan($nama,$umur){
        $nama = $this->name;
        $umur = $this->age;
        echo "Halo nama saya $nama, saya sekarang berumur $umur";
    }
}

class Car{
    function startEngine(){
        echo "Engine started";
        echo "Engine started";
    }
}

class Rectangle{
    public $height,$width;

    function calculateArea($height,$width){
        $luas = $height*$width;
        return "luas area ini adalah ".$luas;
    }
}


class Emplyee{
    public $gaji ;
    function __construct($salary){
        $this->gaji = $salary;
    }
    function getSalary(){
        return $this->gaji ;
    }
}

echo "\n";
$agung = new Person('Agung',18);
$agung->perkenalan('Agung', 20);

echo "\n";
$mobil = new Car();
$mobil->startEngine();
echo "\n";

$kotak = new Rectangle();
echo $kotak->calculateArea(20,30);
echo "\n";

$karyawan = new Emplyee(200000);
echo "Gaji karyawan di pt A :".$karyawan->getSalary();
echo "\n";

?>