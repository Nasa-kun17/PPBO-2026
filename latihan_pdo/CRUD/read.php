<?php
require_once '../Catatan.php';

$id = 3; // Ganti dengan ID catatan yang ingin ditampilkan
$detail = Catatan::getById($id);
if ($detail) {
    echo "Judul: " . $detail['judul'] . PHP_EOL;
    echo "Isi: " . $detail['isi'] . PHP_EOL;
} else {
    echo "Catatan tidak ditemukan.";
}