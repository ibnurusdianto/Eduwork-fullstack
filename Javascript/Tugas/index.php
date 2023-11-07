<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Sesi 30 -  Index</title>
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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
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
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</head>
<body>
<?php
// panggil konfigurasi db
include_once "config/config.php";
$data_query = mysqli_query($con, "SELECT * FROM siswa");
?>
<form action="" method="post">
    <table id="myTable">
        <thead>
        <div class="text-center">
            <a href="prosess/insert.php" class="btn btn-success">Insert Data</a>
        </div>
        <tr>
            <th onclick="sortTable(0)">No</th>
            <th onclick="sortTable(1)">Nama</th>
            <th onclick="sortTable(2)">Jenis Kelamin</th>
            <th onclick="sortTable(3)">Alamat</th>
            <th onclick="sortTable(4)">Nomer Telpon</th>
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
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["jenis_kelamin"];?></td>
                    <td><?php echo $data["alamat"];?></td>
                    <td><?php echo $data["no_telpon"];?></td>
                    <td>
                        <a href="prosess/hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        <a href="prosess/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                </tr>
                <?php $no++; } ?>
        <?php } ?>
        </tbody>
    </table>
</form>
<div class="text-center">
    <a href="guru/index.php" class="btn btn-primary">Lihat Tabel Guru</a>
</div><br>

<div class="text-center">
    <a href="mapel/index.php" class="btn btn-primary">Lihat Tabel Mata Pelajaran</a>
</div>
</body>
</html>