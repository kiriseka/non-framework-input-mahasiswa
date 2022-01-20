<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "input_mahasiswa";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}