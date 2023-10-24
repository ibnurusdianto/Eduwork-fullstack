<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <style>
        .navbar {
            background-color: orange;
            text-align: left;
            padding: 10px;
            margin-bottom: 50px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #FFFFFF;

        }
        tr:nth-child(odd) {
            background-color: #CCCCCC;

        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>Daftar Nilai</h1>
</div>
<table border="1">
    <thead>
    <tr>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Nilai</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = file_get_contents("data.json");
    $nilai = json_decode($data, true);

    foreach ($nilai as $n) {
        echo "<tr>";
        echo "<td>" . $n['nama'] . "</td>";
        echo "<td>" . $n['kelas'] . "</td>";
        echo "<td>" . $n['alamat'] . "</td>";
        echo "<td>" . $n['tanggal_lahir'] . "</td>";
        echo "<td>" . $n['nilai'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
</body>
</html>