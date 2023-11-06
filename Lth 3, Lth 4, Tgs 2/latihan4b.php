<?php
$negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

echo "<b>Daftar Negara ASEAN awal:</b><br>";
echo "<ul>";
for ($i = 0; $i < count($negara_asean); $i++) {
  echo "<li>" . $negara_asean[$i] . "</li>";
}
echo "</ul>";

array_push($negara_asean, "Laos", "Filipina", "Myanmar");

echo "<b>Daftar Negara ASEAN baru:</b><br>";
echo "<ul>";
for ($i = 0; $i < count($negara_asean); $i++) {
  echo "<li>" . $negara_asean[$i] . "</li>";
}
echo "</ul>";
?>