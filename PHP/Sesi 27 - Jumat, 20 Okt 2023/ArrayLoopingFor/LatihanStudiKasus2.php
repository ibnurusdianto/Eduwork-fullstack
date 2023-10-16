<?php
$siswa = array("Ibnu", "Heru", "Tina", "Barra", "Kireina");
?>
<ul>
    <?php
    foreach ($siswa as $nama) {
        echo "<li>Nama : " . $nama . "</li>";
    }
    ?>
</ul>