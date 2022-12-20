<?php

$file = "anggota.json";

$anggota = file_get_contents($file);


$data = json_decode($anggota, true);

$data [] = array(
    'nim'     => 2107412050,
    'nama'   => 'Daniel',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412051,
    'nama'   => 'Adji',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412052,
    'nama'   => 'sans',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412053,
    'nama'   => 'Tuy',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412054,
    'nama'   => 'Tol',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);


$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


$anggota = file_put_contents($file, $jsonfile);
