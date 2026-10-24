<?php

class Pokemon {
    // 1. Memiliki 4 property dengan visibility private
    private $nama;
    private $tipe;
    private $tinggi;
    private $berat;

    // 2. Getter untuk membaca setiap property
    public function getNama() {
        return $this->nama;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getTinggi() {
        return $this->tinggi;
    }

    public function getBerat() {
        return $this->berat;
    }

    // 3. Setter untuk mengubah setiap property
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    // 4. Validasi 1 pada Setter: Tinggi harus lebih dari 0
    public function setTinggi($tinggi) {
        if ($tinggi > 0) {
            $this->tinggi = $tinggi;
        } else {
            echo "Error: Tinggi Pokemon harus lebih besar dari 0.<br>";
        }
    }

    // 4. Validasi 2 pada Setter: Berat harus lebih dari 0
    public function setBerat($berat) {
        if ($berat > 0) {
            $this->berat = $berat;
        } else {
            echo "Error: Berat Pokemon harus lebih besar dari 0.<br>";
        }
    }
}

// 5. Membuat Object dari class Pokemon & mengisi data menggunakan Setter
$pokemon1 = new Pokemon();
$pokemon1->setNama("Charizard");
$pokemon1->setTipe("Fire");
$pokemon1->setTinggi(2.4); // dalam meter (m)
$pokemon1->setBerat(102);  // dalam kilogram (kg)

// 6. Menampilkan Data Pokemon menggunakan Getter
echo "Nama: " . $pokemon1->getNama() . "<br>";
echo "Tipe: " . $pokemon1->getTipe() . "<br>";
echo "Tinggi: " . $pokemon1->getTinggi() . " m<br>";
echo "Berat: " . $pokemon1->getBerat() . " kg<br>";

?>