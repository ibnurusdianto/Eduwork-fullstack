<?php
include_once "../../config/config.php";

if(isset($_POST['submit'])) {
    $nama_mapel = $_POST['nama_mapel'];
    $nama_guru = $_POST['nama_guru'];
    $jadwal_mapel = $_POST['jadwal_mapel'];
    $result = mysqli_query($con, "INSERT INTO mapel(nama_mapel,nama_guru,jadwal_mapel) VALUES('$nama_mapel','$nama_guru','$jadwal_mapel')");
    header("Location:../../mapel/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert Mapel</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Add custom JavaScript -->
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Insert Mapel</h1>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="nama_mapel">Nama Mapel:</label>
                    <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
                </div>
                <div class="form-group">
                    <label for="nama_guru">Nama Guru:</label>
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
                </div>
                <div class="form-group">
                    <label for="jadwal_mapel">Jadwal Mapel:</label>
                    <input type="text" class="form-control" id="jadwal_mapel" name="jadwal_mapel" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>