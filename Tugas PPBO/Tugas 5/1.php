<?php
// Parent Class
class Produk {
    protected $nama;
    protected $merek;
    protected $harga;

    public function __construct($nama, $merek, $harga) {
        // Validasi harga tidak boleh negatif
        if ($harga < 0) {
            throw new Exception("Harga produk tidak boleh negatif!");
        }
        $this->nama = $nama;
        $this->merek = $merek;
        $this->harga = $harga;
    }

    public function getInfo() {
        return "Merek: " . $this->merek . " | Harga: Rp " . number_format($this->harga, 0, ',', '.');
    }
}

// Child Class 1: Makanan
class Makanan extends Produk {
    private $tanggalKadaluarsa;

    public function __construct($nama, $merek, $harga, $tanggalKadaluarsa) {
        parent::__construct($nama, $merek, $harga);
        $this->tanggalKadaluarsa = $tanggalKadaluarsa;
    }

    public function cekStatus() {
        $today = date('Y-m-d');
        return ($this->tanggalKadaluarsa < $today) ? "Kadaluarsa" : "Segar";
    }

    // Overriding method getInfo()
    public function getInfo() {
        return "Produk: Makanan " . $this->nama . " | " . parent::getInfo() . 
               " | Tanggal Kadaluarsa: " . $this->tanggalKadaluarsa . 
               " | Status: " . $this->cekStatus();
    }
}

// Child Class 2: Elektronik
class Elektronik extends Produk {
    private $garansi;

    public function __construct($nama, $merek, $harga, $garansi) {
        parent::__construct($nama, $merek, $harga);
        $this->garansi = $garansi;
    }

    // Overriding method getInfo()
    public function getInfo() {
        return "Produk: Elektronik " . $this->nama . " | " . parent::getInfo() . 
               " | Garansi: " . $this->garansi . " bulan";
    }
}

// Eksekusi Program
try {
    $makanan = new Makanan("Mie Instan", "Indomie", 3500, "2025-06-30");
    $elektronik = new Elektronik("Smart TV", "Samsung", 5000000, 12);

    echo $makanan->getInfo() . "<br>";
    echo $elektronik->getInfo() . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>