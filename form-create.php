<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
    <form action="create.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Tambah Data</p>
            <div class="input-group">
                <input type="text" placeholder="NIM" name="nim" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Nama Lengkap" name="nama" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="No. HP" name="no_hp" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Alamat di Malang" name="alamat_malang" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Alamat Asal" name="alamat_asal" required>
            </div>
            <div class="input-group">
                <button type="submit" name="daftar" class="btn">Daftar</button>
            </div>
        </form>
    </div>
</body>
</html>