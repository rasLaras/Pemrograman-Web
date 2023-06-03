<?php
    include "koneksi.php";

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    

    mysqli_query($koneksi, "INSERT INTO datamahasiswa VALUE ('', '$nim', '$nama', '$alamat')");
    header("location:tabel.php? pesan=update");
?>
