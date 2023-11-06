<?php
include_once "../../config/config.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($con, "DELETE FROM mapel WHERE id=$id");
    header("Location:../../mapel/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Mapel</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Add Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Delete Mapel</h1>
    <p>Apakah Anda yakin ingin menghapus data ini?</p>
    <a href="../mapel/hapus.php?id=<?php echo $_GET['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
    <a href="../../mapel/index.php" class="btn btn-secondary">Batal</a>
</div>
</body>
</html>