<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];

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
}
?>

<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
    Nama: <input type="text" name="nama" value="" /><br />
    Tinggi (cm): <input type="text" name="tinggi" value="" /><br />
    Berat (kg): <input type="text" name="berat" value="" /><br />
    <button type="submit" name="calculate">Submit</button>
</form>