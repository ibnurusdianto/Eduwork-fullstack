<?php
$siswa = array(
    array("Ibnu", 23, "Full Stack 1"),
    array("Heru", 30, "Vue JS"),
    array("Tina", 30, "SpringBoot"),
    array("Anita", 22, "UI/UX"),
    array("Nasa", 22, "Graphics Designer")
);
?>
<ul>
    <?php
    foreach ($siswa as $data) {
        echo "<li>Nama : " . $data[0] . " Umur : " . $data[1] . " tahun, kelas : " . $data[2] . "</li>";
    }
    ?>
</ul>