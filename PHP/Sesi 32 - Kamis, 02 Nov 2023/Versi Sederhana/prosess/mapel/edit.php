<?php
include_once "../../config/config.php";

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama_mapel = $_POST['nama_mapel'];
    $nama_guru = $_POST['nama_guru'];
    $jadwal_mapel = $_POST['jadwal_mapel'];
    $result = mysqli_query($con, "UPDATE mapel SET nama_mapel='$nama_mapel',nama_guru='$nama_guru',jadwal_mapel='$jadwal_mapel' WHERE id=$id");
    header("Location:../../mapel/index.php");
} else {
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM mapel WHERE id=$id");
    $data = mysqli_fetch_array($result);

    $nama_mapel = $data['nama_mapel'];
    $nama_guru = $data['nama_guru'];
    $jadwal_mapel = $data['jadwal_mapel'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Mapel</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Edit Mapel</h1>
    <form method="post">
        <div class="form-group">
            <label for="nama_mapel">Nama Mapel:</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="<?php echo $nama_mapel; ?>" required>
        </div>
        <div class="form-group">
            <label for="nama_guru">Nama Guru:</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?php echo $nama_guru; ?>" required>
        </div>
        <div class="form-group">
            <label for="jadwal_mapel">Jadwal Mapel:</label>
            <input type="text" class="form-control" id="jadwal_mapel" name="jadwal_mapel" value="<?php echo $jadwal_mapel; ?>" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>
</body>
</html>