<?php
$nama = readline("Masukkan nama: ");
$tinggi = readline("Masukkan tinggi (cm): ");
$berat = readline("Masukkan berat (kg): ");

// Calculate BMI
$tinggi_m = $tinggi / 100;
$bmi = $berat / ($tinggi_m * $tinggi_m);

// Determine BMI category
if ($bmi < 18.5) {
    $category = "kurus";
} else if ($bmi < 25) {
    $category = "sedang";
} else {
    $category = "gemuk";
}

// Output result
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $category.";
?>