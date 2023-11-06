<?php
include_once "../../config/config.php";

if(isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $mata_pelajaran = $_POST['mata_pelajaran'];

    $result = mysqli_query($con, "INSERT INTO guru(nama,jenis_kelamin,mata_pelajaran) VALUES('$nama','$jenis_kelamin','$mata_pelajaran')");

    header("Location:../../guru/index.php");
}
?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        text-align: center;
        padding: 50px;
    }

    form {
        max-width: 400px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: calc(100% - 12px);
        padding: 6px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<form action="../../prosess/guru/insert.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama"><br>
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="text" name="jenis_kelamin"><br>
    <label for="mata_pelajaran">Mata Pelajaran:</label>
    <input type="text" name="mata_pelajaran"><br>
    <input type="submit" name="submit" value="Tambah">
</form>


