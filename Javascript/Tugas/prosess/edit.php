<?php
include_once "../config/config.php";

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];

    $result = mysqli_query($con, "UPDATE siswa SET nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_telpon='$no_telpon' WHERE id=$id");

    header("Location:../index.php");
} else {
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM siswa WHERE id=$id");
    $data = mysqli_fetch_array($result);

    $nama = $data['nama'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $no_telpon = $data['no_telpon'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sesi 30 -  Edit</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            padding: 20px;
            margin: 20px auto;
            max-width: 500px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #009879;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #007c6d;
        }

        .error {
            color: red;
            font-size: 0.8em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"><br>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
    <label for="no_telpon">No. Telpon:</label>
    <input type="text" name="no_telpon" value="<?php echo $no_telpon; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var nama = document.querySelector('input[name="nama"]');
        var jenis_kelamin = document.querySelector('input[name="jenis_kelamin"]');
        var alamat = document.querySelector('input[name="alamat"]');
        var no_telpon = document.querySelector('input[name="no_telpon"]');
        var errors = [];
        if (nama.value.trim() === '') {
            errors.push('Nama harus diisi');
        }
        if (jenis_kelamin.value.trim() === '') {
            errors.push('Jenis kelamin harus diisi');
        }
        if (alamat.value.trim() === '') {
            errors.push('Alamat harus diisi');
        }
        if (no_telpon.value.trim() === '') {
            errors.push('No. telpon harus diisi');
        }
        var errorDiv = document.querySelector('.error');
        if (errors.length > 0) {
            event.preventDefault();
            errorDiv.innerHTML = errors.join('<br>');
            errorDiv.style.display = 'block';
            alert(errors.join('\n'));
        } else {
            errorDiv.innerHTML = '';
            errorDiv.style.display = 'none';
        }
    });
</script>
</body>
</html>