<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
</head>

<body>
    <h2>Tabel Nilai Mahasiswa</h2>
    <button style="margin-bottom: 30px;" onclick="location.href='input-nim.php'">Input Dengan Nim</button>
    <?php

    include 'koneksi.php';

    $data = mysqli_query($conn, "SELECT * FROM students");

    echo "<table border = '1'>
    <tr>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Tugas</th>
    <th>UTS</th>
    <th>UAS</th>
    <th>Total Nilai</th>
    <th>Konversi Nilai</th>
    </tr>";

    while ($row = mysqli_fetch_array($data)) {
        echo "<tr>";

        echo "<td>" . $row['nim'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['tugas'] . "</td>";
        echo "<td>" . $row['uts'] . "</td>";
        echo "<td>" . $row['uas'] . "</td>";
        echo "<td>" . $row['total_nilai'] . "</td>";
        echo "<td>" . $row['konversi_nilai'] . "</td>";
        echo "<td>" . "<button onclick=\"location.href='update.php?nim=$row[nim]'\">update nilai</button>" . "</td>";

        echo "</tr>";
    }

    echo "</table>";

    ?>
</body>

</html>