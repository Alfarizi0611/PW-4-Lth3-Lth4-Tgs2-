<?php
function soal($style) {
    $jawabanIsset = "Isset adalah fungsi untuk memeriksa apakah sebuah variabel telah diatur atau belum.";
    $jawabanEmpty = "Empty adalah fungsi untuk memeriksa apakah sebuah variabel kosong atau tidak.";
    
    echo "<p style='$style'>$jawabanIsset</p>";
    echo "<p style='$style'>$jawabanEmpty</p>";
  }
  
  // Memanggil fungsi soal() dengan style CSS
  soal("font-size: 16px; font-family: Arial; color: #333;");    

?>