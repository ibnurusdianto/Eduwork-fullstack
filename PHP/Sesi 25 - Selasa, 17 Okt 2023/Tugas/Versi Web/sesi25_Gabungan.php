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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["number"])) {
        $number = $_POST["number"];
        if ($number % 2 == 0) {
            echo "<p>$number Bilangan Genap</p>";
        } else {
            echo "<p>$number Bilangan Ganjil</p>";
        }
    }
}
?>

<br><br>

<h1>Grade Nilai</h1>
<form method="post">
    <label for="grade">Masukan Nilai :</label>
    <input type="number" name="grade" id="grade">
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["grade"])) {
        $grade = $_POST["grade"];
        if ($grade >= 90) {
            echo "<p>Your grade is A.</p>";
        } elseif ($grade >= 80) {
            echo "<p>Your grade is B.</p>";
        } elseif ($grade >= 70) {
            echo "<p>Your grade is C.</p>";
        } elseif ($grade >= 60) {
            echo "<p>Your grade is D.</p>";
        } else {
            echo "<p>Your grade is F.</p>";
        }
    }
}
?>

<br><br>

<h1>Cek Tahun Kabisat</h1>
<form action="" method="post">
    Masukkan tahun:
    <input type="text" name="tahun">
    <input type="submit" value="Cek">
    <br>
    <?php
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];
        if (!is_numeric($tahun)) {
            echo "Masukan bukan angka.";
            exit();
        }
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
            echo "$tahun adalah tahun kabisat.";
        } else {
            echo "$tahun bukan tahun kabisat.";
        }
    } else {
        echo "Tahun belum dimasukkan.";
    }
    ?>
</form>
</body>
</html>