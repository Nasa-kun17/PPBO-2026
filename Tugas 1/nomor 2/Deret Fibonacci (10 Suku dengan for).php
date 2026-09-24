<?php
$n = 10; // Jumlah suku yang ingin dicetak
$angka1 = 0;
$angka2 = 1;

echo "Deret Fibonacci hingga 10 suku: \n";

for ($i = 0; $i < $n; $i++) {
    // Cetak angka saat ini
    echo $angka1 . " ";
    
    // Proses perhitungan suku berikutnya
    $angkaSelanjutnya = $angka1 + $angka2;
    $angka1 = $angka2;
    $angka2 = $angkaSelanjutnya;
}
// Output: 0 1 1 2 3 5 8 13 21 34
?>