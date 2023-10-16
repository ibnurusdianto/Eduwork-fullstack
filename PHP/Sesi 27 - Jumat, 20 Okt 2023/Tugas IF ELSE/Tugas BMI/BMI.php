<!DOCTYPE html>
<html>
<head>
    <title>Kategori Berat Badan</title>
</head>
<body>
<h1>Kategori Berat Badan</h1>
<form method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama"><br>
    <label for="tinggi_badan">Tinggi Badan (cm):</label>
    <input type="number" name="tinggi_badan" id="tinggi_badan"><br>
    <label for="berat_badan">Berat Badan (kg):</label>
    <input type="number" name="berat_badan" id="berat_badan"><br>
    <input type="submit" name="submit" value="Hitung">
</form>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];

    $tinggi_badan_m = $tinggi_badan / 100; // konversi tinggi badan ke meter
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

    echo "<p>Halo, " . $nama . ". Nilai BMI anda adalah " . $bmi . ", anda termasuk " . $kategori . ".</p>";
}
?>
</body>
</html>