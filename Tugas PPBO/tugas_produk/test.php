<?php
require_once 'DatabaseConnection.php';

echo "Menguji koneksi database...\n";

// Memanggil koneksi menggunakan Singleton
$koneksi = DatabaseConnection::getConnection();

if ($koneksi) {
    echo "Mantap! Koneksi ke database 'tugas_pdo' BERHASIL.\n";
} else {
    echo "Waduh, koneksi GAGAL.\n";
}
?>