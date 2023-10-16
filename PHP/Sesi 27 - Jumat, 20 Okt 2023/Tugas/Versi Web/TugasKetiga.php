<!DOCTYPE html>
<html>
<head>
    <title>Pola Bintang</title>
</head>
<body>
<h1>Pola Angka</h1>
<?php
for ($i = 0; $i <= 9; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}
?>
</body>
</html>