<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <h1>Update Nilai Mahasiswa</h1>
    <form action="proses-update.php" method="POST">
        <?php
        $nim = $_GET['nim'];
        include 'koneksi.php';     
        $query = mysqli_query($conn, "SELECT * FROM students WHERE nim = $nim");
        WHILE ($data = mysqli_fetch_array($query)) {
        ?>
        <table>
            <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">
            <tr>
                <td>Nama</td>
                <td><input disabled name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Tugas</td>
                <td><input type="number" name="tugas" value="<?php echo $data['tugas']; ?>"></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="number" name="uts" value="<?php echo $data['uts'];  ?>"></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="number" name="uas" value="<?php echo $data['uas'];  ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>