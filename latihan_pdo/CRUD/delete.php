<?php
require_once '../Catatan.php';
$id = 2; // Ganti dengan ID catatan yang ingin dihapus
$hapus = Catatan::delete($id);
if ($hapus) {
    echo "Catatan {$id} berhasil dihapus";
} else {
    echo "Gagal menghapus catatan";
}