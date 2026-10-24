<?php
class DetailPesanan {
    private $jumlah;
    private $hargaSatuan;
    private $subtotal;
    private $produk;

    public function __construct($produk, $jumlah) {
        $this->produk = $produk;
        $this->jumlah = $jumlah;
        $this->hargaSatuan = $produk->getHarga();
        $this->subtotal = $this->hitungSubtotal();
    }

    public function hitungSubtotal() {
        return $this->jumlah * $this->hargaSatuan;
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function getHargaSatuan() {
        return $this->hargaSatuan;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getProduk() {
        return $this->produk;
    }
}
?>