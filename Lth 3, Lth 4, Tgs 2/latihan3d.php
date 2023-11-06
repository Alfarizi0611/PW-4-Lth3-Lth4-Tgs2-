<?php
$a = 5;
function faktorial($a) {
    $hasil = 1;
    for ($i = 1; $i <= $a; $i++) {
      $hasil *= $i;
    }
    return $hasil;
  }
  
  echo "Faktorial dari $a = " . faktorial($a);

?>