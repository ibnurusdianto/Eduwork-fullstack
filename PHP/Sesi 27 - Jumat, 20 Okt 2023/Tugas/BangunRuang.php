<?php
function hitungVolumeBalok($panjang, $lebar, $tinggi) {
    $volume = $panjang * $lebar * $tinggi;
    return $volume;
}

function hitungVolumeKubus($sisi) {
    $volume = $sisi * $sisi * $sisi;
    return $volume;
}

function hitungVolumeTabung($jari, $tinggi) {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$panjang = 10;
$lebar = 5;
$tinggi = 8;
$sisi = 6;
$jari = 4;
$tinggi_tabung = 12;

echo "Volume balok dengan panjang $panjang, lebar $lebar, dan tinggi $tinggi adalah " . hitungVolumeBalok($panjang, $lebar, $tinggi) . "<br>";
echo "Volume kubus dengan sisi $sisi adalah " . hitungVolumeKubus($sisi) . "<br>";
echo "Volume tabung dengan jari-jari $jari dan tinggi $tinggi_tabung adalah " . hitungVolumeTabung($jari, $tinggi_tabung) . "<br>";
?>