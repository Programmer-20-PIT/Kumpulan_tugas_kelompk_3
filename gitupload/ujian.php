<?php
echo "Soal Tugas 1\n";

// Buat sebuah variabel yang menyimpan nilai string dan tampilkan hasilnya.
$variabel = "Hanif Variabel";
echo "$variabel\n";

// Buat sebuah variabel yang menyimpan nilai integer, kemudian ubah nilai variabel tersebut dengan menambahkan 5.
$integer = 100;
$integer += 5;
echo $integer . "\n";

// Buat sebuah variabel boolean dengan nilai true dan tampilkan hasilnya.
$bool = true;
if ($bool) {
    echo "Ini variabel true boolean\n";
} else {
    echo "Ini false ga tampil\n";
}

// Buat sebuah array yang berisi angka dari 1 sampai 5, kemudian tampilkan elemen pertama dan terakhir dari array tersebut.
$arrays = array(1, 2, 3, 4, 5);
echo $arrays[0] . "\n";
echo $arrays[4] . "\n";

// Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya: $var = 100;
$var = 100;
echo gettype($var) . " Adalah Jenis type var 100\n";

// Buat sebuah variabel yang menyimpan float dan ubah nilai variabel tersebut menjadi hasil perkalian dengan 2.
$rata = 5.4;
$rata2 = 5;
$rata2 = (float) $rata2;
echo $rata * $rata2 * 2 . "\n";

// Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya:
$var1 = "123";
echo var_dump($var1) . "\n";
echo "Pengganti var dump, type datanya: " . gettype($var1) . "\n\n";

// Tugas 2
echo "Tugas 2\n";
// Ubah variabel string yang berisi angka "123.45" menjadi integer, dan tampilkan hasilnya
$angkastring = "123.45"; // Mengubah string menjadi float
$angkastring = (int) $angkastring;
echo var_dump($angkastring) . "\n";

// Ubah variabel integer menjadi float. Kemudian, tampilkan hasilnya.
$integer = 50;
$integer = (float) $integer;
var_dump($integer) . "\n";

// Buat variabel bertipe array dan ubah menjadi tipe object, kemudian tampilkan hasilnya.
$arrays2 = array(1, 2, 3);
$arrays2 = (object) $arrays2;
var_dump($arrays2);
echo "\n\n";

// Tugas 3
echo "Tugas 3\n";

// Buat sebuah fungsi yang menerima dua parameter integer dan mengembalikan hasil penjumlahannya.
function name($a, $b) {
    return $a + $b;
}
echo name(10, 10) . "\n";

// Buat fungsi rekursif untuk menghitung faktorial dari angka yang diberikan.
function faktorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * faktorial($n - 1); 
    }
}
echo faktorial(2) . "\n";

// Buat fungsi yang menerima dua angka dan mengembalikan hasil pembagian keduanya. Pastikan untuk menangani pembagian dengan nol (dividing by zero).
function perhitungan($mending, $mending2) {
    if ($mending2 == 0) {
        return "Error: Pembagian dengan nol tidak diperbolehkan.";
    }
    return $mending / $mending2;
}
//Buat fungsi yang menerima dua angka dan mengembalikan hasil pembagian keduanya. Pastikan untuk menangani pembagian dengan nol (dividing by zero).

echo "\n";
$hasil3 = perhitungan(6, 3);
echo "Hasil pembagian: " . $hasil3 . "\n";

$hasil4 = perhitungan(6, 0);
echo "Hasil pembagian: " . $hasil4 . "\n";
echo "Tugas 4";
echo "\n";
// Buat sebuah class bernama Person dengan property name dan age. Buat objek dari class tersebut dan tampilkan nilai property name.
class person {
    public $name;
    public $age;
    public function muzdaj($name) {
        $this->name = $name;
    }
    public function muzdaj2() {
        return $this->name;
    }
    public function getage($age) {
        $this->age = $age;
    }
    public function setage() {
        return $this->age;
    }
}
$baru = new person();
$baru->muzdaj(" Hanif");
// $baru->setage(90);
echo "Namamu adalah" . $baru->name . "\n";
//Buat class Car dengan method startEngine(), yang menampilkan "Engine Started" ketika dipanggil.
class car {
    public $engine;
    public function startEngine($engine) {
        $this->engine = $engine;
    }
public function startengine2() {
    return $this->engine;
}
}
$newcar = new car();
$newcar->startengine("Engine Started");
echo $newcar->startengine2();
//Buat class Rectangle dengan property width dan height, serta method calculateArea() yang mengembalikan hasil luas (area) dari persegi panjang.
class Rectangle{
    public $widht;
    public $height;
    public function __construct($widht, $height) {
    $this->widht = $widht;
    $this->height = $height;  
    }
    public function calculateArea() {
    return $this->widht * $this->height;
    }
}
//Buat objek dari class Rectangle dan tampilkan hasil perhitungan area berdasarkan property width dan height.
$obeject = new Rectangle(50,4);
echo "\n" . $obeject->calculateArea() . " cm";
//Buat class Employee dengan method getSalary(). Tulis kode untuk menampilkan gaji dari objek Employee.
class Employee{
    public $salary;
    public function setSalary($salary) {
        $this->salary = $salary;
    }
public function getSalary() {
    return $this->salary;
}
}
$teman = new Employee();
$teman->setSalary("500000");
// $teman->setSalary("500 ribu");
echo "\n" . $teman->getSalary() . " Adalah gaji harian para pekerja yg sebulan menghasilkan 15 juta";
echo "\n";
echo "Tugas 5";
// Constructor & Destructor 
// - Buat class dengan constructor yang menerima parameter name dan age, dan tampilkan nama serta umur ketika objek diinisialisasi
class publics{
    public $namees;
    public $age0;
    public function __construct($namees, $age0) {
        $this->namees = $namees;
        $this->age0 = $age0;
    }
    public function namenAge() {
        return $this->namees . "\n". "Umur: " . $this->age0;
    }
}
$tital = new publics("Nama:Hanif", 15);
    echo "\n" . $tital->namenAge();
    echo "\n";
    class book{
        public $author;
        public $title;
        public function __construct($title, $author) {
        $this->author = $author;
        $this->title = $title;
        }
        public function hasilauthor() {
            echo "Judul Buku: " . $this->title . "\n";
        echo "Penulis: " . $this->author . "\n";
        }
    }
    $book = new book("Scandal Amerika ", "Albert Einstein");
    echo $book->hasilauthor();
    // Buat class DatabaseConnection dengan destructor yang mencetak pesan "Koneksi ke database ditutup" ketika objek dihancurkan.

    class DatabaseConnection{
         public function __construct() {
             echo "Koneksi ke database dibuat";
         }
        public function __destruct() {
            echo "Koneksi ke database ditutup";
        }
    }
    $testo = new DatabaseConnection();
    unset($testo);
    echo "\n";
    // Buat class yang memiliki constructor untuk menerima nilai parameter, dan destructor yang mencetak pesan ketika objek dihancurkan.
    class CRconstructor{
        public $param;
        public function __construct($param) {
            $this->param = $param;
            echo "Objek Tampil:" . $param . "\n";
    }
    public function call() {
        return " Objek param " . $this->param; 
    }
    public function __destruct() {
        echo " Lalu, " . $this->param . " Dihancurkan";
    }
}
$obeject1 = new CRconstructor(" Destruct");
$obeject1->call();
unset( $obeject1 );
echo "\n";
//Buat class Student dengan property name yang memiliki akses private, method getName() yang memiliki akses public, dan method setName() yang memiliki akses protected. Demonstrasikan akses terhadap properti dan metode di luar class.
echo "\n";
echo "Tugas 6:";
class student{
    private $name1;
    public function __construct($name1) {
    $this->name1 = $name1;
    }
    protected function setName($name1) {
    $this->name1 = $name1;
    }
     public function getName() {
     return $this->name1;
}
}
$student = new Student("Hanif adalah murid baru");
echo $student->getName() . "\n";