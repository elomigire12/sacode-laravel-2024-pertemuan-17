<?php

class Mobil{

    //property
    public $merk;
    public $model;
    public $tahun;
    public $warna;

    //method
    public function start()
    {
        echo "mobil dinyalakan";
    }

    public function cek($nama)
    {
        echo "merek:".$this->merk. '<br>';
        echo "model:".$this->model. '<br>';
        echo "tahun:".$this->tahun. '<br>';
        echo "warna:".$this->warna. '<br>';
        echo "keterangan:".$nama. '<br>';
        

      

    }

}

//objek

$mobil =new Mobil();
$mobil->merk= "Avanza";
$mobil->model= "Nova";
$mobil->tahun = 2823;
$mobil->warna= "putih";

//panggil method


$mobil->cek("Elomi");