<?php
require_once '../Product.php';

$id = $_GET['id'];
$dataProduk = Product::findById($id);

if (isset($_POST['update'])) {
    $produk = new Product();
    $produk->nama_produk = $_POST['nama_produk'];
    $produk->harga = $_POST['harga'];
    $produk->stok = $_POST['stok'];
    
    if ($produk->update($id)) {
        echo "Data berhasil diubah! <a href='readall.php'>Kembali ke Daftar Produk</a>";
    } else {
        echo "Gagal mengubah data.";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Edit Produk</h2>
    <form method="POST" action="">
        Nama Produk: <input type="text" name="nama_produk" value="<?= $dataProduk['nama_produk'] ?>" required><br><br>
        Harga: <input type="number" name="harga" value="<?= $dataProduk['harga'] ?>" required><br><br>
        Stok: <input type="number" name="stok" value="<?= $dataProduk['stok'] ?>" required><br><br>
        <button type="submit" name="update">Update Data</button>
    </form>
    <br>
    <a href="readall.php">Batal</a>
</body>
</html>