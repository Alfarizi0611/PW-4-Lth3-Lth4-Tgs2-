<?php

$angka = 5;
$pangkat = 4;
function pangkat($angka, $pangkat) {
    $hasil = 1;
    for ($i = 1; $i <= $pangkat; $i++) {
      $hasil *= $angka;
    }
    return $hasil;
  }

  echo "$angka pangkat $pangkat = " . pangkat($angka, $pangkat);


?>