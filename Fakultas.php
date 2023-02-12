<?php

class Fakultas {
    public $nama_fakultas = "FIT";

    public function setNama(){
        $this->nama_fakultas = "RPLA";
    }

    public function getNamaFakul(){
        return $this->nama_fakultas;
    }
}