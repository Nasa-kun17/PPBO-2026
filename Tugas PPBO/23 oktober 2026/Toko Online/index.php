<?php
require_once "Produk.php";
require_once "Pelanggan.php";
require_once "DetailPesanan.php";
require_once "Pesanan.php";

echo "=== SIMULASI SISTEM PENJUALAN TOKO ONLINE ===\n\n";

// 1. Inisialisasi Produk
$produk1 = new Produk("P001", "Mechanical Keyboard", 750000, 10);
$produk2 = new Produk("P002", "Gaming Mouse", 300000, 15);

// 2. Inisialisasi Pelanggan
$pelanggan1 = new Pelanggan("C001", "Albert", "albert@example.com", "Jl. A. Yani Pontianak");

echo $pelanggan1->getDataPelanggan() . "\n";
echo "--------------------------------------------------\n";

// 3. Pelanggan membuat pesanan baru
$pesanan1 = $pelanggan1->buatPesanan("ORD-2026-001", "2026-10-24");

// 4. Menambahkan produk ke pesanan (sekaligus memvalidasi & mengurangi stok)
$pesanan1->tambahProduk($produk1, 1);
$pesanan1->tambahProduk($produk2, 2);

// 5. Menampilkan hasil perhitungan total dan status pesanan
echo "Nomor Pesanan : ORD-2026-001\n";
echo "Total Belanja : Rp " . number_format($pesanan1->hitungTotal(), 0, ',', '.') . "\n";
echo "Status Awal   : " . $pesanan1->getStatusPesanan() . "\n";

// Mengubah status pesanan
$pesanan1->ubahStatus("Dibayar / Diproses");
echo "Status Terbaru: " . $pesanan1->getStatusPesanan() . "\n";
?>