<?php
// panggil konfigurasi db
include_once "config/config.php";
$data_query = mysqli_query($con, "SELECT * FROM siswa");
?>

<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Nomer Telpon</th>
            <th>Aksi / Opsi</th>
        </tr>
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
                        <a href="#">Hapus</a>
                        <a href="#">Edit</a>
                    </td>
                </tr>
                <?php $no++; } ?>
        <?php } ?>
    </table>
</form>