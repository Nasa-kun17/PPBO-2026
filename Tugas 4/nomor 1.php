<?php

class Mobil {
    // Properti private
    private $merek;
    private $warna;
    private $kecepatan;

    // Constructor
    public function __construct($merek, $warna, $kecepatan) {
        $this->merek = $merek;
        $this->setWarna($warna);
        $this->setKecepatan($kecepatan);
    }

    // Method Getter
    public function getMerek() {
        return $this->merek;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    // Method Setter Merek
    public function setMerek($merek) {
        $this->merek = $merek;
        echo "Berhasil mengubah merek menjadi {$this->merek}.<br>";
    }

    // Method Setter Kecepatan dengan Validasi
    public function setKecepatan($kecepatan) {
        if ($kecepatan < 0) {
            echo "Error: Kecepatan tidak boleh negatif!<br>";
        } elseif ($kecepatan > 200) {
            echo "Error: Kecepatan maksimal 200 km/jam!<br>";
        } else {
            $this->kecepatan = $kecepatan;
            echo "Berhasil mengubah kecepatan menjadi {$this->kecepatan} km/jam.<br>";
        }
    }

    // Method Setter Warna dengan Validasi
    public function setWarna($warna) {
        if ($warna == "") {
            echo "Error: Warna tidak boleh kosong!<br>";
        } elseif (@$warna[2] == "") {
            echo "Error: Warna minimal 3 karakter!<br>";
        } else {
            $this->warna = $warna;
            echo "Berhasil mengubah warna menjadi {$this->warna}.<br>";
        }
    }

    // Method getInfo
    public function getInfo() {
        return "Mobil {$this->merek} berwarna {$this->warna} memiliki kecepatan {$this->kecepatan} km/jam.<br>";
    }
}

// ================= PENGUJIAN =================

echo "<b>--- Inisialisasi Objek Awal ---</b><br>";
$mobil1 = new Mobil("Toyota", "Merah", 120);
echo "<br>";

echo "<b>--- Pengujian Input yang Benar ---</b><br>";
$mobil1->setWarna("Hitam");
$mobil1->setKecepatan(180);
echo "<br>";

echo "<b>--- Pengujian Input yang Salah ---</b><br>";
$mobil1->setKecepatan(-50);
$mobil1->setKecepatan(250);
$mobil1->setWarna("");
$mobil1->setWarna("Ke");
echo "<br>";

echo "<b>--- Informasi Akhir Mobil ---</b><br>";
echo $mobil1->getInfo();

?>