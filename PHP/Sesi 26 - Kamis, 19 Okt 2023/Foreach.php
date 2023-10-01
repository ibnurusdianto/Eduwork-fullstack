<?php

$books = [
    "Belajar PHP",
    "Belajar HTML",
    "Belajar MySQL"
];

echo "<h5> Judul Buku : </h5>";
echo "<ul>";
foreach ($books as $book){
    echo "<li>$book</li>";
}
echo "</ul>";