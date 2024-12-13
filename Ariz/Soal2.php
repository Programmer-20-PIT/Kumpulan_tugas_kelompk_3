<?php
/*
2. Casting 🔄
- Ubah variabel string yang berisi angka "123.45" menjadi integer, dan tampilkan hasilnya.
- Ubah variabel integer menjadi float. Kemudian, tampilkan hasilnya.
- Buat variabel bertipe array dan ubah menjadi tipe object, kemudian tampilkan hasilnya.
*/

$var1 = "123.45";
$convert1 = (int) $var1;
var_dump($convert1);
echo "\n";
echo "nilai dari \$var1 menjadi integer = " . $convert1;
echo "\n";

$var2 = 123;
$convert2 = (float) $var2;
var_dump($convert2);
echo "\n";
echo "nilai dari \$var2 menjadi float = " . $convert2;
echo "\n";


class var3{
    public $convert;
    public $array = [];
    
    public function set_convert(...$var){
        foreach($var as $isi){
            $this->array[] = $isi;}
    }
    public function read(){
        foreach($this->array as $isi){
            echo "> ".$isi."\n";
        }
    }

    public function get_convert(){
        return $this->convert;
    }
}

$var3 = [1,2,3];
$convert3 = new var3();
var_dump($var3);
foreach ($var3 as $content){
    $convert3->set_convert($content);
}
// echo $content;
// var_dump($convert3);
echo "\n";
echo $convert3->read();
echo "\n";
?>