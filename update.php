<?php
$file = "anggota.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);

foreach ($data as $key => $d) {
    // Perbarui data kedua
    if ($d['nim'] === 2107412009) {
        $data[$key]['nama'] = 'ipul';
    }
}

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

$anggota = file_put_contents($file, $jsonfile);
