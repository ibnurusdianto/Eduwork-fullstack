<?php
/**
 * do while loop, sekali perulangan dilakukan
 * walaupun kondisi tidak bernilai true, sedangkan while
 * dilakukan di awal sebelum perulangan dilakukan,
 */

$ulangi = 10;

do {
    echo "Ini adalah perulangan ke - $ulangi" . PHP_EOL;
    $ulangi--;
}while($ulangi > 1);