<!DOCTYPE html>
<html>
<head>
    <title>DATA MAHASISWA</title>
    <link rel="stylesheet" href="desain3.css">
</head>
<body>

    <h2>DATA MAHASISWA</h2>
    <br>
    <h3>EDIT DATA MAHASISWA</h3>
    <br>

    <?php
    include 'koneksi.php';
    $kode_mahasiswa=$_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE `kode mahasiswa`='$kode_mahasiswa'");
    while($d=mysqli_fetch_array($data)){

        ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td><input type="text" name="kode_mahasiswa" value="<?php echo $d['kode mahasiswa']; ?>"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>
                        <input type="text" name="nama_mahasiswa" value="<?php echo $d['nama mahasiwa']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"></td>
                </tr>
                 <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
    <a href="index.php">KEMBALI</a>

</body>
</html>