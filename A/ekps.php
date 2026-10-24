<?php

class Mahasiswa{
    protected $name;

}

class MahasiswaAktif extends Mahasiswa{
    public function getName($name){
        $this->name;
    }

    public function setName(){
        $this->name;
    }
}

$mhs = new Mahasiswa();
$mhs->setNama('andreanus');
echo $mhs->getName();