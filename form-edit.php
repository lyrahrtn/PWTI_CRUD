<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['nim']) ){
    header('Location: read.php');
}

//ambil id dari query string
$nim = $_GET['nim'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dataalamat WHERE nim=$nim";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Edit Data</title>
</head>

<body>
<div class="container">
    <form action="proses-edit.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Data</p>
            <div class="input-group">
            <input type="hidden" name="nim" value="<?php echo $mahasiswa['nim'] ?>" />
            </div>
            <div class="input-group">
            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
            </div>
            <div class="input-group">
            <input type="text" name="no_hp" placeholder="Nomor HP" value="<?php echo $mahasiswa['no_hp'] ?>" />
            </div>
            <div class="input-group">
            <input type="text" name="alamat_malang" placeholder="Alamat di Malang" value="<?php echo $mahasiswa['alamat_malang'] ?>" />
            </div>
            <div class="input-group">
            <input type="text" name="alamat_asal" placeholder="Alamat Asal" value="<?php echo $mahasiswa['alamat_asal'] ?>" />
            </div>
            <div class="input-group">
                <button type="submit" name="simpan" class="btn">Simpan</button>
            </div>
        </form>
    </div>

    </body>
</html>