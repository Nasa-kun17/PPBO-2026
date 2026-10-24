<?php
require_once '../Product.php';

$id = $_GET['id'];
$detail = Product::findById($id);

if ($detail) {
    echo "<h2>Detail Produk</h2>";
    echo "ID: " . $detail['id'] . "<br>";
    echo "Nama Produk: " . $detail['nama_produk'] . "<br>";
    echo "Harga: Rp " . number_format($detail['harga'], 0, ',', '.') . "<br>";
    echo "Stok: " . $detail['stok'] . "<br><br>";
    echo "<a href='readall.php'>Kembali ke Daftar Produk</a>";
} else {
    echo "Produk tidak ditemukan. <a href='readall.php'>Kembali</a>";
}
?>