<?php
include_once "../config/config.php";

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM siswa WHERE id=$id");

header("Location:../index.php");
?>