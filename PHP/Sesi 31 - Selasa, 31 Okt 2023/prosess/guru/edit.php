<?php
include_once "../../config/config.php";

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $mata_pelajaran = isset($_POST['mata_pelajaran']) ? $_POST['mata_pelajaran'] : null;

    $result = mysqli_query($con, "UPDATE guru SET nama='$nama',jenis_kelamin='$jenis_kelamin',mata_pelajaran='$mata_pelajaran' WHERE id=$id");

    header("Location:../../guru/index.php");
} else {
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM guru WHERE id=$id");
    $data = mysqli_fetch_array($result);

    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $mata_pelajaran = $data['mata_pelajaran'];
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
        background-color: #fff;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    input {
        width: calc(100% - 16px);
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group:last-child {
        margin-bottom: 0;
    }

    .form-group label {
        font-size: 16px;
    }

    .form-group input {
        font-size: 16px;
    }
</style>
<div class="card">
    <form action="../../prosess/guru/edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
        <label for="mata_pelajaran">Mata Pelajaran:</label>
        <input type="text" name="mata_pelajaran" value="<?php echo $mata_pelajaran; ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
</div>
