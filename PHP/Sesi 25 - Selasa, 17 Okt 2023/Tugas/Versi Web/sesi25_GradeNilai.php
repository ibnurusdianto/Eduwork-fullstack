<!DOCTYPE html>
<html>
<head>
    <title>Grade Nilai</title>
</head>
<body>
<h1>Grade Nilai</h1>
<form method="post">
    <label for="grade">Masukan Nilai :</label>
    <input type="number" name="grade" id="grade">
    <button type="submit">Submit</button>
</form>
<?php
/**
 * bagian dimana saya memanggil function $_SERVER (reserved) lalu request methodnya yaitu POST,
 * lalu angka nilai atau grade akan dikirim (POST) dengan value grade (nilai)
 * sumber : https://www.php.net/manual/en/reserved.variables.server.php
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
?>
</body>
</html>