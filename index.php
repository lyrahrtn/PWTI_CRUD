<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Tempat Tinggal Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Pendataan Tempat Tinggal Mahasiswa</h3>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-data.php">Isi di sini</a></li>
            <li><a href="list-data.php">Data Mahasiswa</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendataan berhasil!";
            } else {
                echo "Pendataan gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </body>
</html>