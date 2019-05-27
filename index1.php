<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP MYSQL - Belajarphp.net</title>
    </head>
    <body>
        <h2>Daftar Penyakit</h2>
        <table border="1">
            <tr><th>PENYAKIT</th><th>DESKRIPSI</th><th>TIPS</th><th>ACTION</th></tr>
            <?php
            include 'koneksi.php';
            $tekdev = mysqli_query($tekdev, "SELECT * from mahasiswa");
            $no = 1;
                echo "<tr>
            <td>$no</td>
            <td>" . $row['penyakit'] . "</td>
            <td>" . $row['deskripsi'] . "</td>
            <td>" . $row['tips'] . "</td>
            <td><a href='edit1.php?id_mahasiswa=$row[id_mahasiswa]'>Edit</a>
                <a href='delete.php?id_mahasiswa=$row[id_mahasiswa]'>Delete</a>
            </td>
              </tr>";
                $no++;
            }
            ?>
        </table>

    </body>
</html>