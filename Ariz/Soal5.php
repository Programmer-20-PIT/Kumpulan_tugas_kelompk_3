<?php
class Person{
    public $name;
    public $age;

    function __construct($nama,$usia){
        $this->name = $nama;
        $this->age = $usia;
    }

    function __destruct(){
        echo "Halo nama saya $this->name dan usia saya $this->age \n";
    }
}

class Book{
    public $title,
    $author;

    function __construct($title, $author){
        $this->title = $title;
        $this->author = $author;
    }

    function __destruct(){
        echo "Buku ini berjudul $this->title, yang ditulis oleh $this->author\n";
    }
}

class DatabaseConnection{
    function __destruct(){
        echo "Koneksi database ditutup\n";
    }
}

class Perkenalan{
    function __construct($nama){
        echo "Halo nama saya $nama\n";
    }

    function __destruct(){
        echo "Ya udah sekian dulu bye...\n";
    }
}

$orang = new Person("Bambang",19);
$buku = new Book("Habislah gelap muncul terang","Empu Tantular");
$koneksi = new DatabaseConnection();
$kenalan = new Perkenalan("Budi");


?>