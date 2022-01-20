<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
</head>

<body>
    <h1>Update Nilai Mahasiswa</h1>
    <form action="update.php?nim=$row[nim]" method="GET">
        <?php
        include 'koneksi.php';
        $query = mysqli_query($conn, "SELECT * FROM students");

        ?>
        <table>

            <tr>
                <td>Input Nim</td>
                <td> <input type="number" name="nim"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>

    </form>
</body>

</html>