<!DOCTYPE html>
<html>
<head>
    <title>Tabel Siswa</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>Nama ke " . $i . "</td>";
        echo "<td>Kelas " . (11 - $i) . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>