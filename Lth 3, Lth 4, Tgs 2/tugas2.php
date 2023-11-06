<?php
$data = array(
    array(
        "Nama" => "Tari Piring",
        "Deskripsi" => "Tari tradisional dari Sumatera Barat yang menggunakan piring sebagai properti.",
        "Gambar" => "../Pertemuan 4/img/Tari Piring.jpg",
        "Asal" => "Sumatera Barat"
    ),
    array(
        "Nama" => "Tari Kecak",
        "Deskripsi" => "Tari tradisional dari Bali yang menggunakan suara 'cak' sebagai musik pengiring.",
        "Gambar" => "../Pertemuan 4/img/Tari Kecak.jpg",
        "Asal" => "Bali"
    ),
    array(
        "Nama" => "Tari Saman",
        "Deskripsi" => "Tari tradisional dari Aceh yang melibatkan gerakan tangan dan badan yang cepat.",
        "Gambar" => "../Pertemuan 4/img/Tari Saman.jpg",
        "Asal" => "Aceh"
    ),
    array(
        "Nama" => "Tari Topeng",
        "Deskripsi" => "Tari tradisional dari Jawa yang menggunakan topeng sebagai properti.",
        "Gambar" => "../Pertemuan 4/img/Tari Topeng.jpg",
        "Asal" => "Jawa"
    ),
    array(
        "Nama" => "Tari Pendet",
        "Deskripsi" => "Tari tradisional dari Bali yang dilakukan oleh sekelompok wanita dengan gerakan yang lemah gemulai.",
        "Gambar" => "../Pertemuan 4/img/Tari Pendet.jpg",
        "Asal" => "Bali"
    ),
    array(
        "Nama" => "Tari Reog",
        "Deskripsi" => "Tari tradisional dari Jawa Timur yang melibatkan penari yang mengenakan topeng singa dan kostum yang berat.",
        "Gambar" => "../Pertemuan 4/img/Tari Reog.jpg",
        "Asal" => "Jawa Timur"
    ),
    array(
        "Nama" => "Tari Serimpi",
        "Deskripsi" => "Tari tradisional dari Jawa yang dilakukan oleh sekelompok wanita dengan gerakan yang lemah gemulai.",
        "Gambar" => "../Pertemuan 4/img/Tari Serimpi.jpg",
        "Asal" => "Jawa"
      ),
    array(
        "Nama" => "Tari Jaipong",
        "Deskripsi" => "Tari modern yang berasal dari Jawa Barat yang melibatkan gerakan yang dinamis dan energik.",
        "Gambar" => "../Pertemuan 4/img/Tari Jaipong.jpg",
        "Asal" => "Jawa Barat"
      ),
    array(
        "Nama" => "Tari Tor-Tor",
        "Deskripsi" => "Tari tradisional dari Sumatera Utara yang melibatkan gerakan yang dinamis dan energik.",
        "Gambar" => "../Pertemuan 4/img/Tari Tor Tor.jpg",
        "Asal" => "Sumatera Utara"
      ),
    array(
        "Nama" => "Tari Rampak Gendang",
        "Deskripsi" => "Tari tradisional dari Jawa Timur yang melibatkan gerakan yang dinamis dan energik.",
        "Gambar" => "../Pertemuan 4/img/Tari Rampak Gendang.jpg",
        "Asal" => "Jawa Timur"
    ),
    );
?>

<h1 style="text-align: center;">BUDAYA DAERAH DI INDONESIA</h1>
<?php
function displayDataInTable($data) {
    echo "<table border='1'>";
    echo "<tr><th style='background-color: gray'>Nama</th>
            <th style='background-color: gray'>Deskripsi</th>  
                <th style='background-color: gray'>Gambar</th>
                    <th style='background-color: gray'>Asal</th></tr>";
    foreach ($data as $item) {
        echo "<tr>";
        echo "<td>".$item["Nama"]."</td>";
        echo "<td>".$item["Deskripsi"]."</td>";
        echo "<td><img src='".$item["Gambar"]."' alt='".$item["Nama"]."' width='150'></td>";
        echo "<td>".$item["Asal"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

displayDataInTable($data);
?>