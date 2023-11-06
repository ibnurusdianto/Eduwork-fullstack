<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "siswa";
$con = new mysqli($hostname, $username, $password, $db_name);

if ($con){
    echo "Berhasil konek";
} else {
    echo "Error";
}