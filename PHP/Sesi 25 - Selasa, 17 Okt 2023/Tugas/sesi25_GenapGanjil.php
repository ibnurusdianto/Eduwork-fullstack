<?php
echo "Masukkan angka number: ";
// user input function menggunakan readline
$angka = readline();

// pengecekan jika bukan numeric maka akan error atau exit program (ditolak)
if (!is_numeric($angka)) {
    echo "Masukan bukan angka.";
    exit();
}

// pengecekan untuk ganjil genap
/**
 * jika angka % 2 = 0 (genap)
 * Jika angka % 2 = 1 (Ganjil)
 */
if ($angka % 2 == 0) {
    echo "$angka adalah bilangan genap.";
} else {
    echo "$angka adalah bilangan ganjil.";
}
?>
