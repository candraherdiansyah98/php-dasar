<?php
// array assosiatif -> array 2 dimensi
// index diganti menjadi string
$siswa = [
    ["nama" => "Andi", "kelas" => "XI RPL"],
    ["nama" => "Budi", "kelas" => "X TKJ"],
    ["nama" => "Citra", "kelas" => "XI MM"],
];

echo "Data Siswa: " . $siswa[0]['nama'] . "<hr>";

foreach ($siswa as $data) {
    echo "Nama: " . $data["nama"] . "-Kelas: " . $data["kelas"] . "<br>";
}
