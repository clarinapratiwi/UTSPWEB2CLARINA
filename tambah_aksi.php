<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $waktu = $_POST['waktu'];

    mysqli_query($db,"insert into post1 values('','$nama','$alamat','$kontak','$waktu')");

    header("location:tabel.php");
?>