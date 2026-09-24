<?php
// 1. Interface Bentuk sesuai instruksi Halaman 10
interface Bentuk {
    public function hitungLuas();
}

// 2. Class Persegi
class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitungLuas() {
        return $this->sisi * $this->sisi;
    }

    // Method tambahan untuk mencetak teks informasi
    public function getInfo() {
        return "Luas Persegi (sisi=" . $this->sisi . "): " . $this->hitungLuas();
    }
}

// 3. Class Lingkaran
class Lingkaran implements Bentuk {
    private $radius;
    const PHI = 3.14;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function hitungLuas() {
        return self::PHI * $this->radius * $this->radius;
    }

    // Method tambahan untuk mencetak teks informasi
    public function getInfo() {
        return "Luas Lingkaran (radius=" . $this->radius . "): " . $this->hitungLuas();
    }
}

// 4. Array dan Perulangan (Polimorfisme)
$bentukArray = [
    new Persegi(5),
    new Lingkaran(7)
];

foreach ($bentukArray as $bentuk) {
    echo $bentuk->getInfo() . "<br>";
}
?>