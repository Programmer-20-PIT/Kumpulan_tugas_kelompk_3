<?php
namespace Math;
class Mathematics{
    function masukkan(&$array){
        $b=true;
        while($b){//flag stop while
            // Memasukkan input ke array 
            $nilai = readline("Masukkan nilai array (satu-satu):");
            $array[] = $nilai;
    
            // Form untuk menghentikan input
            echo "tekan enter untuk lanjut dan ketik y atau  Y untuk menyudahi input, ";
            $input = readline("Sudah selesai ?");
            $b = ($input == "y"|| $input == "Y") ? false:true; //doteset quality
        }
    }
    function average(): float{
        $array = [];
        $this->masukkan($array);
        print_r($array);
        $sum = 0;
        foreach($array as $data){
            $array[]= (int) $data;
            $sum += $data;
        }
        $average = $sum/count($array);
        return $average;
    }
}
// masukkan($nilai);
$contoh = new Mathematics();
echo $contoh->average();
?>