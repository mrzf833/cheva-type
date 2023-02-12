<?php 

require_once("./Helper/CekMahasiswa.php");

use Helper\CekMahasiswa as DataMahasiswa;

$cekMahasiswa = new Helper\CekMahasiswa();
$cekMahasiswa = new DataMahasiswa();

var_dump($cekMahasiswa->cek());

