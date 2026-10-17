<?php
class DatabaseConnection {
    // Menyimpan instance koneksi agar tidak dibuat berulang kali (Singleton)
    private static $connection = null;

    public static function getConnection() {
        if (self::$connection === null) {
            try {
                // Konfigurasi PDO
                $dsn = "mysql:host=localhost;dbname=tugas_pdo;charset=utf8";
                $username = "root";
                $password = "";
                
                self::$connection = new PDO($dsn, $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Koneksi gagal: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}
?>