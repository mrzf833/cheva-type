<?php 
require_once("./Fakultas.php");

class Mahasiswa extends Fakultas{
    public $nama = "falaq";
    protected $tanggalLahir = "02-03-2004";
    private $ibu;

    public function __construct($namaIbu="cewe")
    {
        $this->ibu = $namaIbu;
        echo "inisiasi pertama";
        echo $this->nama_fakultas;

        echo $this->getNamaFakul();
    }

    public function getNamaFakul(){
        return "berubah";
    }

    public function getIbu(){
        return $this->ibu;
    }

    public function masuk(){
        return "mahasiswa sudah masuk";
    }

    public function thisKey(){
        return $this->nama;
    }

    public static function belajar(){
        return "sedang belajar";
    }
}

$mahasiswa1 = new Mahasiswa("cowo");
// $mahasiswa2 = new Mahasiswa("cowo");
// $mahasiswa3 = new Mahasiswa("cowo");

// var_dump($mahasiswa1->nama);
// var_dump($mahasiswa1->tanggalLahir);
// var_dump($mahasiswa1->ibu);
// var_dump($mahasiswa1->getIbu());

// var_dump($mahasiswa1);

// var_dump(Mahasiswa::belajar());
