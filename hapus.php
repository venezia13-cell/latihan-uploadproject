<?php
include 'koneksi.php';

$kode_mahasiswa= $_GET['id'];

mysqli_query($koneksi,"DELETE from mahasiswa WHERE `kode mahasiswa`='$kode_mahasiswa'");

header("location:index.php");

?>