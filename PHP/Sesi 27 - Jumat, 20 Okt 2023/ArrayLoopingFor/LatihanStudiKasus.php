<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
<?php
$siswa = array(
    array("Ibnu", 23, "Full Stack 1"),
    array("Heru", 30, "Vue JS"),
    array("Tina", 30, "SpringBoot"),
    array("Anita", 22, "UI/UX"),
    array("Nasa", 22, "Graphics Designer")
);
?>
<table border="1">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kelas</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    foreach ($siswa as $data) {
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . " tahun</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "</tr>";
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>