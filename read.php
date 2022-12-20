<?php
$file = "anggota.json";

$anggota = file_get_contents($file);


$data = json_decode($anggota, true);

foreach ($data as $d) {
    echo $d['nim']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['kelas']. "<br>";
    echo $d['prodi']. "<br>";
    echo $d['jurusan']. "<br>";
}

