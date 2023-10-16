<?php
$nama = readline("Masukkan nama: ");
$tinggi_badan = readline("Masukkan tinggi badan (cm): ");
$berat_badan = readline("Masukkan berat badan (kg): ");

$tinggi_badan_m = $tinggi_badan / 100;
$bmi = $berat_badan / ($tinggi_badan_m * $tinggi_badan_m);

if ($bmi < 18.5) {
    $kategori = "kurus";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    $kategori = "normal";
} elseif ($bmi >= 25 && $bmi < 30) {
    $kategori = "gemuk";
} else {
    $kategori = "obesitas";
}

echo "Halo, " . $nama . ". Nilai BMI anda adalah " . $bmi . ", anda termasuk " . $kategori . ".\n";
?>