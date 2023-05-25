<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 1</title>
    </head>
    <body>
        <h3>Data Mahasiswa</h3>
        <h5>Menambahkan data mahasiswa</h5>
        <form action="tambah_aksi_full.php" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan"></td>
                </tr>
            </table>
        </form>

        <h5>Menampilkan Data Mahasiswa</h5>
        <table border="1">
            <tr>
                <td>No</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Menu</td>
            </tr>
            <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from Mahasiswa");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                            <a href="lihat.php?nim=<?php echo $d['nim']; ?>">Lihat</a>
                            <a href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
                            <a href="hapus.php?nim=<?php echo $d['nim']; ?>"></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>