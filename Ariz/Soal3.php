<?php
function Penambahan($angka1,$angka2){
    return $angka1 + $angka2;
}

function Sapaan($nama){
    echo "Hello, my name is ".$nama." nice to meet you\n";
}

function Faktorial($n){
    if ($n == 1 || $n == 0){
        return 1;
    }else{
        return $n * Faktorial($n-1);
    }
    // echo $n."adalah bilangan prime yang mendapatkan julukan prime number:...";

}

function isbigger($number1,$number3){
    // check is same?
    if ($number1 === $number3){
        return "Angka yang dimasukkan sama";
    }else{
        $test = ($number1>$number3) ? $number1 : $number3;
    return $test; }
}

function Pembagian($angka1,$angka2){
    if($angka1 == 0 || $angka2 == 0){
        echo "Error: tidak bisa membagi dengan angka nol";
    }else{
        return $angka1 / $angka2;
    }
}

echo "ini adalah hasil dari Penambahan(1,1);  ".Penambahan(1,1)."\n";
echo "ini adalah hasil dari Sapaan('Ganteng');  ".Sapaan("Ganteng")."\n";
echo "ini adalah hasil dari Faktorial(5);  ".Faktorial(5)."\n";
echo "ini adalah hasil dari isbigger(2,1);  ".isbigger(2,1)."\n";
echo "ini adalah hasil dari isbigger(2,2);  ".isbigger(2,2)."\n";
echo "ini adalah hasil dari isbigger(1,2);  ".isbigger(1,3)."\n";
echo "ini adalah hasil dari Pembagian(2,3);  ".Pembagian(2,3)."\n";
echo "ini adalah hasil dari Pembagian(2,0);  ".Pembagian(2,0)."\n";
?>