<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="desain1.css"> 
</head>
<body>
    <h1>Penambahan Data Mahasiswa</h1><br/>
    <h2>Universitas Schoon</h2><br>
    <form method="post"action="tambah_aksi.php"></br>
        <fieldset>
            <legend>Form Input</legend>
            <table>
                <tr>
                    <td>Kode Mahasiswa</td>
                    <td><input type="text" name="kode_mahasiswa"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><input type="text" name="nama_mahasiswa"></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td><input type="text" name="jurusan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
            </table>
            <button type="submit">SIMPAN</button></br>
        </fieldset>
    </form></br>
    <a href="index.php">KEMBALI</a><br/>
</body>
</html>