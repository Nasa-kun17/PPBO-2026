<?php
// File: luas_oop.php

class PersegiPanjang {
    public $panjang;
    public $lebar;

    // Constructor untuk inisialisasi nilai
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method untuk menghitung luas
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}

// Contoh penggunaan (Instansiasi Objek)
$objekPersegiPanjang = new PersegiPanjang(10, 5);
$luas = $objekPersegiPanjang->hitungLuas();

echo "Luas Persegi Panjang (OOP) dengan panjang {$objekPersegiPanjang->panjang} dan lebar {$objekPersegiPanjang->lebar} adalah: $luas";
?>