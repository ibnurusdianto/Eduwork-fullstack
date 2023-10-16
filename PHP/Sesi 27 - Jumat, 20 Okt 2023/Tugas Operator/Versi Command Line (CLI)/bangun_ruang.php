<?php
// Menghitung volume kubus
$sisi = 5;
$volume_kubus = $sisi * $sisi * $sisi;
echo "Volume kubus dengan sisi " . $sisi . " adalah " . $volume_kubus . "\n";

// Menghitung volume balok
$panjang = 10;
$lebar = 5;
$tinggi = 3;
$volume_balok = $panjang * $lebar * $tinggi;
echo "Volume balok dengan panjang " . $panjang . ", lebar " . $lebar . ", dan tinggi " . $tinggi . " adalah " . $volume_balok . "\n";

// Menghitung volume tabung
$jari_jari = 4;
$tinggi_tabung = 10;
$volume_tabung = 3.14 * $jari_jari * $jari_jari * $tinggi_tabung;
echo "Volume tabung dengan jari-jari " . $jari_jari . " dan tinggi " . $tinggi_tabung . " adalah " . $volume_tabung . "\n";
?>