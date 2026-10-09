<?php
function hitungNilaiAkhir($uts, $uas, $tugas): float {
    // Menghitung bobot masing-masing nilai
    $bobotUts = $uts * 0.30;
    $bobotUas = $uas * 0.40;
    $bobotTugas = $tugas * 0.30;
    
    // Menjumlahkan total nilai
    $nilaiAkhir = $bobotUts + $bobotUas + $bobotTugas;
    
    // Memastikan nilai kembalian adalah float
    return (float) $nilaiAkhir;
}

// Contoh pemanggilan fungsi
$nilaiUts = 80;
$nilaiUas = 85;
$nilaiTugas = 90;

$hasilAkhir = hitungNilaiAkhir($nilaiUts, $nilaiUas, $nilaiTugas);
echo "Nilai Akhir Mahasiswa: " . $hasilAkhir; 
// Output: Nilai Akhir Mahasiswa: 85
?>