<?php
// File: luas_prosedural.php

function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Contoh penggunaan
$panjang = 10;
$lebar = 5;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);

echo "Luas Persegi Panjang (Prosedural) dengan panjang $panjang dan lebar $lebar adalah: $luas";
?>