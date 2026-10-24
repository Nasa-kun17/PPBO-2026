<?php

class Mahasiswa{
    private $name;

    public function getName(){
        return $this->name;
    }

    public function setName(){
        return $this->name;
    }
}

$mhs = new Mahasiswa();
$mhs->setNama('andreanus');
echo $mhs