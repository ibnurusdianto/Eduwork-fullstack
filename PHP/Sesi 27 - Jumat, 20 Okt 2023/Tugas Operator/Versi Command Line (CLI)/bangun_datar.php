<?php
// Menghitung luas persegi
$sisi = 5;
$luas_persegi = $sisi * $sisi;
echo "Luas persegi dengan sisi " . $sisi . " adalah " . $luas_persegi . "\n";

// Menghitung luas persegi panjang
$panjang = 10;
$lebar = 5;
$luas_persegi_panjang = $panjang * $lebar;
echo "Luas persegi panjang dengan panjang " . $panjang . " dan lebar " . $lebar . " adalah " . $luas_persegi_panjang . "\n";

// Menghitung luas segitiga
$alas = 8;
$tinggi = 6;
$luas_segitiga = 0.5 * $alas * $tinggi;
echo "Luas segitiga dengan alas " . $alas . " dan tinggi " . $tinggi . " adalah " . $luas_segitiga . "\n";

// Menghitung luas trapesium
$sisi_a = 5;
$sisi_b = 7;
$tinggi_trapesium = 4;
$luas_trapesium = 0.5 * ($sisi_a + $sisi_b) * $tinggi_trapesium;
echo "Luas trapesium dengan sisi a " . $sisi_a . ", sisi b " . $sisi_b . ", dan tinggi " . $tinggi_trapesium . " adalah " . $luas_trapesium . "\n";

// Menghitung luas lingkaran
$jari_jari = 4;
$luas_lingkaran = 3.14 * $jari_jari * $jari_jari;
echo "Luas lingkaran dengan jari-jari " . $jari_jari . " adalah " . $luas_lingkaran . "\n";
?>