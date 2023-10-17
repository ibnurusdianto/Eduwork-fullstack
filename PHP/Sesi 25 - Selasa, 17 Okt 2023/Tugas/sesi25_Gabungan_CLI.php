<?php
function checkGenapGanjil() {
    echo "Masukkan angka number: ";
    $angka = readline();
    if (!is_numeric($angka)) {
        echo "Masukan bukan angka.";
        exit();
    }
    if ($angka % 2 == 0) {
        echo "$angka adalah bilangan genap.";
    } else {
        echo "$angka adalah bilangan ganjil.";
    }
}

function checkTahunKabisat() {
    echo "Masukkan tahun: ";
    $tahun = readline();
    if (!is_numeric($tahun)) {
        echo "Masukan bukan tahun.";
        exit();
    }
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        echo "$tahun adalah tahun kabisat.";
    } else {
        echo "$tahun bukan tahun kabisat.";
    }
}

function checkGradeNilai() {
    $nilai = 75;
    if ($nilai >= 90) {
        echo "Grade: A";
    } elseif ($nilai >= 80) {
        echo "Grade: B";
    } elseif ($nilai >= 70) {
        echo "Grade: C";
    } elseif ($nilai >= 60) {
        echo "Grade: D";
    } else {
        echo "Grade: E";
    }
}

echo "Pilih fungsi yang ingin dijalankan:\n";
echo "1. Cek bilangan genap/ganjil\n";
echo "2. Cek tahun kabisat\n";
echo "3. Cek grade nilai\n";
echo "Masukkan pilihan : ";
$pilihan = readline();

switch ($pilihan) {
    case 1:
        checkGenapGanjil();
        break;
    case 2:
        checkTahunKabisat();
        break;
    case 3:
        checkGradeNilai();
        break;
    default:
        echo "Pilihan tidak valid.";
        break;
}
?>