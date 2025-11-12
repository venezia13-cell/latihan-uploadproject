<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="desain2.css"> 
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <h2>Universitas Schoon</h2>
    <br/>
    <br/>
    <table border="1.5">
        <tr>
            <th>NO</th>
            <th>Kode Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no =1;
        $data= mysqli_query($koneksi, "SELECT * from mahasiswa");
        while($d= mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode mahasiswa']; ?></td>
                <td><?php echo $d['nama mahasiwa']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['kode mahasiswa']; ?>">UPDATE</a>
                    <a href="hapus.php?id=<?php echo $d['kode mahasiswa']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table><br>
    <br>
    <br>
    <a href="tambah.php">+ TAMBAH SISWA</a>

</body>
</html>