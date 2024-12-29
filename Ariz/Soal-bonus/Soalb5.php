<?php
// require '/home/ariz/Documents/dev/latihan/PHP/Soal3.php';
use Math;

$math = new Mathematics();

$array = [];
$math->masukkan($array);
function FindMaxMin($array){
    $k = [];
    foreach($array as $data){
        $k[]=$data;
        echo $data;
    }
}

FindMaxMin($array);

?>