<?php
class Pelanggan {
    private $idPelanggan;
    private $nama;
    private $email;
    private $alamat;

    public function __construct($idPelanggan, $nama, $email, $alamat) {
        $this->idPelanggan = $idPelanggan;
        $this->nama = $nama;
        $this->email = $email;
        $this->alamat = $alamat;
    }

    public function buatPesanan($nomorPesanan, $tanggalPesanan) {
        return new Pesanan($nomorPesanan, $tanggalPesanan, "Pending");
    }

    public function ubahAlamat($alamatBaru) {
        $this->alamat = $alamatBaru;
    }

    public function getDataPelanggan() {
        return "ID: " . $this->idPelanggan . ", Nama: " . $this->nama . ", Alamat: " . $this->alamat;
    }
}
?>