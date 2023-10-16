<!DOCTYPE html>
<html>
<head>
    <title>Luas Bangun Datar</title>
</head>
<body>
<h1>Luas Bangun Datar</h1>
<ul>
    <li>Persegi</li>
    <?php
    $sisi = 5;
    $luas_persegi = $sisi * $sisi;
    echo "<li>Luas persegi dengan sisi " . $sisi . " adalah " . $luas_persegi . "</li>";
    ?>
    <li>Persegi Panjang</li>
    <?php
    $panjang = 10;
    $lebar = 5;
    $luas_persegi_panjang = $panjang * $lebar;
    echo "<li>Luas persegi panjang dengan panjang " . $panjang . " dan lebar " . $lebar . " adalah " . $luas_persegi_panjang . "</li>";
    ?>
    <li>Segitiga</li>
    <?php
    $alas = 8;
    $tinggi = 6;
    $luas_segitiga = 0.5 * $alas * $tinggi;
    echo "<li>Luas segitiga dengan alas " . $alas . " dan tinggi " . $tinggi . " adalah " . $luas_segitiga . "</li>";
    ?>
    <li>Trapesium</li>
    <?php
    $sisi_a = 5;
    $sisi_b = 7;
    $tinggi_trapesium = 4;
    $luas_trapesium = 0.5 * ($sisi_a + $sisi_b) * $tinggi_trapesium;
    echo "<li>Luas trapesium dengan sisi a " . $sisi_a . ", sisi b " . $sisi_b . ", dan tinggi " . $tinggi_trapesium . " adalah " . $luas_trapesium . "</li>";
    ?>
    <li>Lingkaran</li>
    <?php
    $jari_jari = 4;
    $luas_lingkaran = 3.14 * $jari_jari * $jari_jari;
    echo "<li>Luas lingkaran dengan jari-jari " . $jari_jari . " adalah " . $luas_lingkaran . "</li>";
    ?>
</ul>
</body>
</html>