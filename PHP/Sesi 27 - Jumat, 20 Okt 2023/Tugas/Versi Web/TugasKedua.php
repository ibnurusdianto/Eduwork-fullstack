<!DOCTYPE html>
<html>
<head>
    <title>Pola Bintang</title>
</head>
<body>
<h1>Pola Bintang</h1>
<?php
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>