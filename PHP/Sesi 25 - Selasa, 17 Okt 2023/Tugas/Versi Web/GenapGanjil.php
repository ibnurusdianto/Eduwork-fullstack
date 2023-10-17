<!DOCTYPE html>
<html>
<head>
    <title>Genap dan Ganjil</title>
</head>
<body>
<h1>Genap dan Ganjil</h1>
<form method="post">
    <label for="number">Masukan angka :</label>
    <input type="number" name="number" id="number">
    <button type="submit">Submit</button>
</form>
<?php
/**
 * bagian dimana saya memanggil function $_SERVER (reserved) lalu request methodnya yaitu POST,
 * lalu number akan dikirim (POST) dengan value number
 * sumber : https://www.php.net/manual/en/reserved.variables.server.php
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    /**
     * nah dibagian ini pengecekan kondisi, jika number habis di modulo 2 maka bilangan
     * tersebut genap, sebaliknya jika number habis di modulo 2 maka bilangan ganjil
     */
    if ($number % 2 == 0) {
        echo "<p>$number Bilangan Genap</p>";
    } else {
        echo "<p>$number Bilangan Ganjil</p>";
    }
}
?>
</body>
</html>