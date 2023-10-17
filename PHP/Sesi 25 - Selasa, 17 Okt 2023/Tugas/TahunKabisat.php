<?php
echo "Masukkan tahun: ";
// user input function menggunakan readline
$tahun = readline();

/**
 * pengecekan jika inputan bukan sebuah numeric maka ditolak!
 */
if (!is_numeric($tahun)) {
    echo "Masukan bukan tahun.";
    exit();
}

/**
 * rumus untuk tahun kabisat
 * Jika tahun % 4 = 0 (berarti dia adalah tahun kabisat)
 * DAN tahun % 100 != 0  (bukan tahun kabisat) atau terkecuali tahun % 400 = 0 maka dia adalah tahun kabisat
 */
if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
    echo "$tahun adalah tahun kabisat.";
} else {
    echo "$tahun bukan tahun kabisat.";
}
?>
