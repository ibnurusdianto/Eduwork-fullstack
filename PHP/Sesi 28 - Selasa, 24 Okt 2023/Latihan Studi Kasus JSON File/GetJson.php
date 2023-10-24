<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
    <style>
        .navbar {
            background-color: orange;
            text-align: left;
            padding: 10px;
            margin-top: -10px;
            margin-bottom: 50px;
            width: 100%;
            margin-left: -10px;
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
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Nilai</th>
        <th>Hasil</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = file_get_contents("data.json");
    $nilai = json_decode($data, true);
    $no = 1;
    foreach ($nilai as $n) {
        $tanggal_lahir = new DateTime($n['tanggal_lahir']);
        $hari_ini = new DateTime();
        $umur = $hari_ini->diff($tanggal_lahir)->y;
        $tanggal_lahir_formatted = $tanggal_lahir->format('d F Y');
        if ($n['nilai'] >= 90) {
            $hasil = 'A';
        } elseif ($n['nilai'] >= 80) {
            $hasil = 'B';
        } elseif ($n['nilai'] >= 70) {
            $hasil = 'C';
        } elseif ($n['nilai'] >= 65) {
            $hasil = 'D';
        } elseif ($n['nilai'] >= 55) {
            $hasil = 'D';
        } else {
            $hasil = 'E';
        }
        echo "<tr>";
        echo "<td>" . $no . "</td>";
        echo "<td>" . $n['nama'] . "</td>";
        echo "<td>" . $tanggal_lahir_formatted . "</td>";
        echo "<td>" . $umur . "</td>";
        echo "<td>" . $n['alamat'] . "</td>";
        echo "<td>" . $n['kelas'] . "</td>";
        echo "<td>" . $n['nilai'] . "</td>";
        echo "<td>" . $hasil . "</td>";
        echo "</tr>";
        $no++;
    }
    ?>
    </tbody>
</table>
</body>
</html>