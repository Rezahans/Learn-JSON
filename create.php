<?php
$data [] = array(
    'nim'     => 2107412008,
    'nama'   => 'Reza Hans Latif',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);

$data [] = array(
    'nim'     => 2107412009,
    'nama'   => 'Ipul',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412010,
    'nama'   => 'Hasan',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412011,
    'nama'   => 'Iman',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412012,
    'nama'   => 'Iqbal',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412013,
    'nama'   => 'Ayub',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412014,
    'nama'   => 'Sahat',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412015,
    'nama'   => 'Fey',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412016,
    'nama'   => 'Ayesha',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);
$data [] = array(
    'nim'     => 2107412017,
    'nama'   => 'Wih',
    'kelas' => 'CCIT 3A',
    'prodi' => 'Teknik Informatika',
    'jurusan' => 'TIK'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);


file_put_contents('anggota.json', $jsonfile);
