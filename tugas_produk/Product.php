<?php
require_once 'DatabaseConnection.php';

class Product {
    private $db;
    public $nama_produk;
    public $harga;
    public $stok;

    public function __construct() {
        // Menggunakan koneksi Singleton
        $this->db = DatabaseConnection::getConnection();
    }

    // Tambah data
    public function save() {
        $sql = "INSERT INTO produk (nama_produk, harga, stok) VALUES (:nama_produk, :harga, :stok)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'nama_produk' => $this->nama_produk,
            'harga' => $this->harga,
            'stok' => $this->stok
        ]);
    }

    // Lihat semua data
    public static function findAll() {
        $db = DatabaseConnection::getConnection();
        $stmt = $db->query("SELECT * FROM produk ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    // Lihat satu data berdasarkan ID
    public static function findById($id) {
        $db = DatabaseConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM produk WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // Update data
    public function update($id) {
        $sql = "UPDATE produk SET nama_produk = :nama_produk, harga = :harga, stok = :stok WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'nama_produk' => $this->nama_produk,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'id' => $id
        ]);
    }

    // Hapus data
    public static function delete($id) {
        $db = DatabaseConnection::getConnection();
        $stmt = $db->prepare("DELETE FROM produk WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
?>