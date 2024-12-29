<?php
function Fibonacci($urutan){
    $angka1 = 0;
    $angka2 = 1;

    echo "Bilangan fibonacci :";
    for ($i=0; $i < $urutan; $i++) { 
        $total = $angka1 + $angka2;
        $angka1 = $angka2;
        $angka2 = $total;
        echo $total."";
    }
}

Fibonacci(5);
?>