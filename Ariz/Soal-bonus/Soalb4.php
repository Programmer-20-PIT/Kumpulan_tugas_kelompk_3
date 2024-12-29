<?php 
class PersonB{
    private $name ="Pandri";
    protected $age = 28;
    public $adress= "Bandung";

    function getName(){
        return $this->name;
    }

    function setAdress($adress){
        $this->adress = $adress;
        echo "Perubahan disimpan dari $this->adress ke $adress";
    }
}

class get_age extends PersonB{
    function getAge(){
        return $this->age;
    }
}

$b = new get_age();
echo $b->getName();
echo "\n";
echo $b->getAge();
echo "\n";
echo $b->setAdress("Aria");


?>