<?php
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

function hitungLuasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

function hitungLuasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function hitungLuasLingkaran($jari) {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

function hitungLuasTrapezoid($sisiAtas, $sisiBawah, $tinggi) {
    $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
    return $luas;
}

echo "Luas persegi dengan sisi 5 adalah " . hitungLuasPersegi(5) . "<br>";
echo "Luas persegi panjang dengan panjang 4 dan lebar 6 adalah " . hitungLuasPersegiPanjang(4, 6) . "<br>";
echo "Luas segitiga dengan alas 3 dan tinggi 4 adalah " . hitungLuasSegitiga(3, 4) . "<br>";
echo "Luas lingkaran dengan jari-jari 7 adalah " . hitungLuasLingkaran(7) . "<br>";
echo "Luas trapesium dengan sisi atas 5, sisi bawah 7, dan tinggi 4 adalah " . hitungLuasTrapezoid(5, 7, 4) . "<br>";
?>