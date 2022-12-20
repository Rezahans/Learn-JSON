<?php
$file = "anggota.json";

$anggota = file_get_contents($file);


$data = json_decode($anggota, true);

foreach ($data as $key => $d) {
    // Hapus data kedua
    if ($d['nim'] === 2107412009) {
        // Menghapus data array sesuai dengan index
        // Menggantinya dengan elemen baru
        array_splice($data, $key, 1);
    }
}

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
