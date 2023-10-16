<?php
/**
 * kita melakukan perulangan dari 1 sampai dengan 9
 * lalu kita menggunakan kondisi if untuk pengecekan number, dimana jika
 * i % 2 = 0 maka akan menampilkan bilangan genap, tapi sebaliknya, kalo
 * variable i % 2 = 1 maka yang akan di tampilkan yaitu bilagan ganjil
 */
for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        echo $i . " adalah bilangan genap<br>";
    } else {
        echo $i . " adalah bilangan ganjil<br>";
    }
}