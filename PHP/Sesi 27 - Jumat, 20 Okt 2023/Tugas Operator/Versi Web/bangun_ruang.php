<!DOCTYPE html>
<html>
<head>
    <title>Volume Bangun Ruang</title>
</head>
<body>
<h1>Volume Bangun Ruang</h1>
<ul>
    <li>Kubus</li>
    <?php
    $sisi = 5;
    $volume_kubus = $sisi * $sisi * $sisi;
    echo "<li>Volume kubus dengan sisi " . $sisi . " adalah " . $volume_kubus . "</li>";
    ?>
    <li>Balok</li>
    <?php
    $panjang = 10;
    $lebar = 5;
    $tinggi = 3;
    $volume_balok = $panjang * $lebar * $tinggi;
    echo "<li>Volume balok dengan panjang " . $panjang . ", lebar " . $lebar . ", dan tinggi " . $tinggi . " adalah " . $volume_balok . "</li>";
    ?>
    <li>Tabung</li>
    <?php
    $jari_jari = 4;
    $tinggi_tabung = 10;
    $volume_tabung = 3.14 * $jari_jari * $jari_jari * $tinggi_tabung;
    echo "<li>Volume tabung dengan jari-jari " . $jari_jari . " dan tinggi " . $tinggi_tabung . " adalah " . $volume_tabung . "</li>";
    ?>
</ul>
</body>
</html>