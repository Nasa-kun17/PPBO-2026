<?php

class Product {
    // 1. Properti (nama, harga, kategori)
    public $nama;
    public $harga;
    public $kategori;

    // 2. Constructor
    public function __construct($nama, $harga, $kategori) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    // 3. Method getInfo()
    public function getInfo() {
        return "Produk: {$this->nama} | Kategori: {$this->kategori} | Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }

    // 4. Method applyDiskon($persen) untuk mengubah harga setelah diskon
    public function applyDiskon($persen) {
        $diskon = $this->harga * ($persen / 100);
        $this->harga = $this->harga - $diskon;
        echo "<i>Diskon {$persen}% berhasil diterapkan pada produk {$this->nama}.</i><br>";
    }
}

// 5. Membuat 2 objek Product
$produk1 = new Product("Laptop Asus", 10000000, "Elektronik");
$produk2 = new Product("Sepatu Running", 500000, "Pakaian & Olahraga");

// Tampilkan Informasi Awal (Sebelum Diskon)
echo "<b>=== Informasi Produk (Sebelum Diskon) ===</b><br>";
echo $produk1->getInfo();
echo $produk2->getInfo();
echo "<br>";

// Menerapkan Diskon
echo "<b>=== Penerapan Diskon ===</b><br>";
$produk1->applyDiskon(10); // Diskon 10%
$produk2->applyDiskon(20); // Diskon 20%
echo "<br>";

// Tampilkan Informasi Akhir (Setelah Diskon)
echo "<b>=== Informasi Produk (Setelah Diskon) ===</b><br>";
echo $produk1->getInfo();
echo $produk2->getInfo();

?>