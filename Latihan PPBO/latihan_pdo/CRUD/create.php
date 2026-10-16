<?php
require_once '../Catatan.php';

$c = new Catatan();
$hasil = $c->setJudul("Ketiga")
           ->setIsi("Belajar Renang")
           ->save();

echo $hasil ? "Berhasil disimpan" : "Gagal";