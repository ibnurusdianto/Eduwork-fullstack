<?php
$nilai = 85;

switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = "A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        $kategori = "B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        $kategori = "C";
        break;
    default:
        $kategori = "D";
        break;
}

echo "Nilai anda adalah " . $nilai . ", kategori nilai anda adalah " . $kategori . ".\n";
?>