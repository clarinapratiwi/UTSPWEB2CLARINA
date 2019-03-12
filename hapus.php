<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    mysqli_query($koneksi,"delete from post1 where id='$id'");

    header("location:tabel.php");
?>