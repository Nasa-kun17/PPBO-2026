<?php
class Pesanan {
    private $nomorPesanan;
    private $tanggalPesanan;
    private $statusPesanan;
    private $detailPesananList = [];

    public function __construct($nomorPesanan, $tanggalPesanan, $statusPesanan) {
        $this->nomorPesanan = $nomorPesanan;
        $this->tanggalPesanan = $tanggalPesanan;
        $this->statusPesanan = $statusPesanan;
    }

    public function tambahProduk($produk, $jumlah) {
        if ($produk->cekStok($jumlah)) {
            $produk->kurangiStok($jumlah);
            $detail = new DetailPesanan($produk, $jumlah);
            $this->detailPesananList[] = $detail;
        } else {
            echo "Stok tidak cukup untuk produk: " . $produk->getNamaProduk() . "\n";
        }
    }

    public function hitungTotal() {
        $total = 0;
        foreach ($this->detailPesananList as $detail) {
            $total = $total + $detail->getSubtotal();
        }
        return $total;
    }

    public function ubahStatus($statusBaru) {
        $this->statusPesanan = $statusBaru;
    }

    public function getStatusPesanan() {
        return $this->statusPesanan;
    }
}
?>