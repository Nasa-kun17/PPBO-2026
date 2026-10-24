<?php
require_once '../Product.php';

if (isset($_POST['simpan'])) {
    $produk = new Product();
    $produk->nama_produk = $_POST['nama_produk'];
    $produk->harga = $_POST['harga'];
    $produk->stok = $_POST['stok'];
    
    if ($produk->save()) {
        echo "Data berhasil disimpan! <a href='readall.php'>Kembali ke Daftar Produk</a>";
    } else {
        echo "Gagal menyimpan data.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Tambah Produk Baru</h2>
    <form method="POST" action="">
        Nama Produk: <input type="text" name="nama_produk" required><br><br>
        Harga: <input type="number" name="harga" required><br><br>
        Stok: <input type="number" name="stok" required><br><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="readall.php">Batal</a>
</body>
</html>