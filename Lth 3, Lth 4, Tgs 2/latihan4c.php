<?php

$negara_asean = array(
  "Indonesia" => "D.K.I. Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw"
);

echo "<b>Daftar Negara ASEAN dan Ibukota:</b><br>";
echo "<ul>";
foreach ($negara_asean as $negara => $ibukota) {
  echo "<li>$negara : $ibukota</li>";
}
echo "</ul>";
?>