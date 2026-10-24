<?php
require_once '../Product.php';
$semuaProduk = Product::findAll();
?>
<!DOCTYPE html>
<html>
<head><title>Daftar Produk</title></head>
<body>
    <h2>Daftar Produk</h2>
    <a href="create.php">Tambah Data Baru</a><br><br>
    
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($semuaProduk as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama_produk'] ?></td>
            <td>Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
            <td><?= $p['stok'] ?></td>
            <td>
                <a href="read.php?id=<?= $p['id'] ?>">Lihat</a> | 
                <a href="update.php?id=<?= $p['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>