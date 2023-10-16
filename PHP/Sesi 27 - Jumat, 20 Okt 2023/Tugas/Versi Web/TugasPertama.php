<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
</head>
<body>
<h1>Tabel Perkalian</h1>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $hasil = $i * 1;
        echo "<tr><td>1 x " . $i . "</td><td>=</td><td>" . $hasil . "</td></tr>";
    }
    ?>
</table>
</body>
</html>