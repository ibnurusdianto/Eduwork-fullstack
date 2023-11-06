<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Sesi 30</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
            font-size: 1em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        table th,
        table td {
            padding: 12px 15px;
        }
        table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount ++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
</head>
<body>
<?php
// panggil konfigurasi db
include_once "../config/config.php";
$data_query = mysqli_query($con, "SELECT * FROM mapel");
?>
<form action="" method="post">
    <table id="myTable">
        <thead>
        <div class="text-center">
            <a href="../prosess/mapel/insert.php" class="btn btn-success">Insert Data Mapel</a>
        </div>
        <tr>
            <th onclick="sortTable(0)">No</th>
            <th onclick="sortTable(1)">Nama Pelajaran</th>
            <th onclick="sortTable(2)">Nama Guru</th>
            <th onclick="sortTable(3)">Jadwal Mata Pelajaran</th>
            <th>Aksi / Opsi</th>
        </tr>
        </thead>
        <tbody>
        <?php if (mysqli_num_rows($data_query)>0) { ?>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($data_query)) {
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["nama_mapel"];?></td>
                    <td><?php echo $data["nama_guru"];?></td>
                    <td><?php echo $data["jadwal_mapel"];?></td>
                    <td>
                        <a href="../prosess/mapel/hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                        <a href="../prosess/mapel/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                </tr>
                <?php $no++; } ?>
        <?php } ?>
        </tbody>
    </table>
</form>
<div class="text-center">
    <a href="../index.php" class="btn btn-primary">Back to Home</a>
</div><br>
</body>
</html>