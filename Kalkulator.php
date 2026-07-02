
<?php

echo "=========================================\n";
echo "=== KALKULATOR NILAI MAHASISWA UPATIK ===\n";
echo "=========================================\n";
$nama = readline("Masukkan Nama Mahasiswa: ");

$inputNilai = readline("Masukkan Nilai Akhir (0-100): ");

if (!is_numeric($inputNilai) || $inputNilai < 0 || $inputNilai > 100) {
    echo "\nNilai tidak valid! Masukkan angka 0-100.\n";
    exit;}
$nilai = (int) $inputNilai;
if ($nilai >= 85) 
    {$predikat = "A";
    $status = "LULUS";} elseif ($nilai >= 70) 
    {$predikat = "B";
    $status = "LULUS";} elseif ($nilai >= 55) 
    {$predikat = "C";
    $status = "LULUS";} elseif ($nilai >= 40) 
    {$predikat = "D";
    $status = "TIDAK LULUS";} else 
    { $predikat = "E";
    $status = "TIDAK LULUS";}
echo "\n========================================\n";
echo "           HASIL EVALUASI NILAI\n";
echo "==========================================\n";
echo "Siswa Atas  " . $nama . " mendapatkan nilai " . $nilai . ".\n";
echo "Predikat : " . $predikat . "\n";
echo "Status   : " . $status . "\n";
echo "===========================================\n";