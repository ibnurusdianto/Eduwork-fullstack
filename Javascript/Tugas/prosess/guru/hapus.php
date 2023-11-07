<?php
include_once "../../config/config.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($con, "DELETE FROM guru WHERE id=$id");

    header("Location:../../guru/index.php");
}
?>
