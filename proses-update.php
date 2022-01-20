<?php
include 'koneksi.php';
$nim                = $_POST['nim'];
$nama               = $_POST['nama'];
$tugas              = $_POST['tugas'];
$uts                = $_POST['uts'];
$uas                = $_POST['uas'];


$total_nilai = ($tugas*30/100) + ($uts *30/100) + ($uas *40/100);

if ($total_nilai > 80) {
    $konversi_nilai = 'A';
} elseif ($total_nilai > 70) {
    $konversi_nilai = 'B';
} elseif ($total_nilai > 60) {
    $konversi_nilai = 'C';
} elseif ($total_nilai > 50) {
    $konversi_nilai = 'D';
} else {
    $konversi_nilai = 'E';
}

echo $nim, $nama, $tugas, $uts, $uas, $total_nilai, $konversi_nilai;



mysqli_query($conn, "UPDATE students SET tugas = '$tugas', uts = '$uts', uas = '$uas', total_nilai = '$total_nilai', konversi_nilai = '$konversi_nilai' WHERE nim = '$nim'");

header("location:nilai.php");
?>