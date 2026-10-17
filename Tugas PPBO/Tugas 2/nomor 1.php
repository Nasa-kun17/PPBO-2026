<?php

class Mobil {
    // Properti
    public $merek;
    public $warna;
    public $kecepatan;

    // Constructor untuk inisialisasi properti
    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
    }

    // Method getInfo() menampilkan informasi mobil
    public function getInfo() {
        return "Mobil {$this->merek} berwarna {$this->warna} memiliki kecepatan {$this->kecepatan} km/jam.<br>";
    }

    // Method jalankan()
    public function jalankan() {
        return "Mobil {$this->merek} berjalan...<br>";
    }

    // Method berhenti()
    public function berhenti() {
        return "Mobil {$this->merek} berhenti.<br>";
    }
}

// Instansiasi 3 objek berbeda
$mobil1 = new Mobil("Toyota", "Merah", 180);
$mobil2 = new Mobil("Honda", "Hitam", 200);
$mobil3 = new Mobil("Suzuki", "Putih", 150);

// Menampilkan hasil objek 1
echo "<b>--- Objek 1 ---</b><br>";
echo $mobil1->getInfo();
echo $mobil1->jalankan();
echo $mobil1->berhenti();
echo "<br>";

// Menampilkan hasil objek 2
echo "<b>--- Objek 2 ---</b><br>";
echo $mobil2->getInfo();
echo $mobil2->jalankan();
echo $mobil2->berhenti();
echo "<br>";

// Menampilkan hasil objek 3
echo "<b>--- Objek 3 ---</b><br>";
echo $mobil3->getInfo();
echo $mobil3->jalankan();
echo $mobil3->berhenti();

?>