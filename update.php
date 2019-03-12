<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    

    mysqli_query($db,"update post1 set nama='$nama',alamat='$alamat',kontak='$kontak' where id='$id'");

    header("location:tabel.php");
?>