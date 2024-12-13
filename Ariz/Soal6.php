<?php

class Student{
    private $name;

    protected function setName($name){
        $this->name = $name;
    }
    public function getName($name){
        return $this->name= $name;
    }
}

$siswa = new Student();
echo $siswa->getName("fufufafa");
?>