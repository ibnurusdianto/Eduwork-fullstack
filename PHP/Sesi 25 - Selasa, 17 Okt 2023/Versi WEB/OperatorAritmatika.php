<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator Aritmatika</title>
</head>
<body>
<?php
$angka1 = 20;
$angka2 = 25;

$total_penjumlahan = $angka1 + $angka2;
echo "Hasil dari penjumlahan adalah : $total_penjumlahan <br>" . PHP_EOL;

$total_perkalian = $angka1 * $angka2;
echo "Hasil dari perkalian adalah : $total_perkalian <br>" . PHP_EOL;

$total_perkurangan = $angka1 - $angka2;
echo "Hasil dari perkurangan adalah : $total_perkurangan <br>" . PHP_EOL;

$total_pangkat = $angka1 ** $angka2;
echo "Hasil Perpangkatan adalah : $total_pangkat <br>" . PHP_EOL;

$total_sisabagi = $angka1 % $angka2;
echo "Hasil Sisa bagi yaitu : $total_sisabagi <br>" . PHP_EOL;
?>
</body>
</html>