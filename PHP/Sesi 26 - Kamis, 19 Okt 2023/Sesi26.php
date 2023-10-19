<?php
/**
 * program angka 1 - 10 dan memberikan keterangan angka dimana bilangan ganjil dan genap
 */
$i = 1;
while ($i <= 10) {
    if ($i % 2 == 0) {
        echo $i . " Bilangan Genap<br>";
    } else {
        echo $i . " Bilangan Ganjil<br>";
    }
    $i++;
}

echo "<br><br>";
/**
 * tahun kabisat dari tahun 2000 - 2023
 */
for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if ($tahun % 4 == 0) {
        if ($tahun % 100 == 0) {
            if ($tahun % 400 == 0) {
                echo $tahun . " Tahun Kabisat<br>";
            } else {
                echo $tahun . " Bukan Tahun Kabisat<br>";
            }
        } else {
            echo $tahun . " Tahun Kabisat<br>";
        }
    } else {
        echo $tahun . " Bukan Tahun Kabisat<br>";
    }
}

echo "<br><br>";

/**
 * Nested looping
 */

for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}