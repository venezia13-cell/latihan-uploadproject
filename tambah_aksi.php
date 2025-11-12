<?php
include 'koneksi.php';

$kode_mahasiswa = $_POST['kode_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('$kode_mahasiswa','$nama_mahasiswa','$nim','$jurusan','$alamat')");

header("location:index.php");

?>
