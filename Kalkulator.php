<?php

// - Menampilkan Judul Program
echo "=========================================\n";
echo "=== KALKULATOR NILAI MAHASISWA UPATIK ===\n";
echo "=========================================\n";

// - Meminta Input Nama Mahasiswa
$nama = readline("Masukkan Nama Mahasiswa: ");

// - Meminta Input Nilai Akhir Mahasiswa
$inputNilai = readline("Masukkan Nilai Akhir (0-100): ");

// - harus berupa angka
// - tidak boleh kurang dari 0
// - tidak boleh lebih dari 100
if (!is_numeric($inputNilai) || $inputNilai < 0 || $inputNilai > 100) {
    echo "\nNilai tidak valid! Masukkan angka 0-100.\n";
    exit; // Menghentikan program jika input salah
}

// Mengubah input menjadi tipe integer
$nilai = (int) $inputNilai;

// - Menentukan Predikat dan Status Kelulusan Berdasarkan Nilai:
// A - Nilai 85 Keatas = A
// B - Nilai 70 - 84 = B
// B - Nilai 55 - 69 = C
// C - Nilai 40 - 54 = D
// D - Nilai di bawah 40 = E

// A
if ($nilai >= 85) {
    $predikat = "A";
    $status = "LULUS";
// B
} elseif ($nilai >= 70) {
    $predikat = "B";
    $status = "LULUS";
//C    
} elseif ($nilai >= 55) {
    $predikat = "C";
    $status = "LULUS";
// D   
} elseif ($nilai >= 40) {
    $predikat = "D";
    $status = "TIDAK LULUS";
// E    
} else {
    $predikat = "E";
    $status = "TIDAK LULUS";
}

// Menampilkan Hasil dari Evaluasi
echo "\n========================================\n";
echo "           HASIL EVALUASI NILAI\n";
echo "==========================================\n";
// Menampilkan Nama Mahasiswa dan Nilai Yang Didapat
echo "Mahasiswa Atas Nama " . $nama . " Mendapatkan Nilai " . $nilai . ".\n";
// Menampilkan Predikat Nilai
echo "Predikat : " . $predikat . "\n";
// Menampilkan Status Kelulusan
echo "Status   : " . $status . "\n";
echo "===========================================\n";
```
