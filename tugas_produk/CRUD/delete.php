<?php
require_once '../Product.php';

$id = $_GET['id'];
$hapus = Product::delete($id);

if ($hapus) {
    echo "Data berhasil dihapus! <a href='readall.php'>Kembali ke Daftar Produk</a>";
} else {
    echo "Gagal menghapus data.";
}
?>