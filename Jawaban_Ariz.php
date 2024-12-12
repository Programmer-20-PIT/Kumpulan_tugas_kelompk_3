<?php
/*
Soal pertama
1. Variabel & Tipe Data 📊
- Buat sebuah variabel yang menyimpan nilai string dan tampilkan hasilnya.
- Buat sebuah variabel yang menyimpan nilai integer, kemudian ubah nilai variabel tersebut dengan menambahkan 5.
- Buat sebuah variabel boolean dengan nilai true dan tampilkan hasilnya.
- Buat sebuah array yang berisi angka dari 1 sampai 5, kemudian tampilkan elemen pertama dan terakhir dari array tersebut.
- Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya:
  php
  $var = 100;
  
- 
- Buat sebuah variabel yang menyimpan float dan ubah nilai variabel tersebut menjadi hasil perkalian dengan 2.
- Tentukan tipe data untuk variabel berikut dan tampilkan tipe datanya:
  php
  $var = "123";
  

---
 */

echo "Soal pertama\n";

// tipe data string
$string = "ini adalah tipe data string \n";
echo "ini adalah tipe data string : $string \n";

// tipe data integer
$integer = 5;
$integer += 5;
echo "ini adalah isi dari variabel \$integer : $integer \n";

// tipe data boolean 
$boolean = True;
echo "Ini adalah isi dari \$Boolean : $boolean \n";

// tipe data array
$array = [1,2,3,4,5];
$akhir= count($array)-1;
print $akhir;
echo "ini tipe data array :\n >Elemen pertama :$array[0]\n> Elemen terakhir: $array[$akhir]\n";

?>