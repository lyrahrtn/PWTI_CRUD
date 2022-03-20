<?php 

include("config.php"); 

$query = "SELECT * FROM dataalamat";
$result = mysqli_query($db, $query);
$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>

<div class="container">
	<div class="row">
		<div class="col">
			
			<div class="container">
				<div class="row mt-4 text-center">
					<div class="col">
						<h3>Data Alamat Kos</h3>
					</div>
				</div>
			</div>

			<form action="" method="post">
				<input type="text" name="keyword" size="40" autofocus placeholder="Search..." autocomplete="off" id="keyword">
				<button type="submit" name="cari" id="tombol-cari" class="btn btn-light">Cari</button>
				<br><br>
			</form>

		</div>
	</div>
</div>


 <!---------------- AWAL TABEL  ---------------------> 

<div class="container">
<nav>
        <a href="form-create.php">[+] Tambah Baru</a>
    </nav>
	<div class="card">
	<div class="card-body" id="container">
		<table class="table table-striped">
        <tr align="center">
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>No. HP</th>
            <th>Alamat Malang</th>
            <th>Alamat Asal</th>
            <th>Aksi</th>
		</tr>
        <?php
        if($num > 0)
        {
            $no = 1;
            while($mahasiswa = mysqli_fetch_assoc($result))
            {
                echo "<tr>";
                echo "<td>".$no ."</td>";
                echo "<td>".$mahasiswa['nim']."</td>";
                echo "<td>".$mahasiswa['nama']."</td>";
                echo "<td>".$mahasiswa['no_hp']."</td>";
                echo "<td>".$mahasiswa['alamat_malang']."</td>";
                echo "<td>".$mahasiswa['alamat_asal']."</td>";
    
                echo "<td>";
                echo "<a href='form-edit.php?nim=".$mahasiswa['nim']."'>Edit</a> | ";
                echo "<a href='hapus.php?nim=".$mahasiswa['nim']."'>Hapus</a>";
                echo "</td>";
    
                echo "</tr>";
                $no++;
            }            
        }else{
            echo "<td colspan='3'>Tidak ada data</td>";
        }
        ?>
    </table>

    <p>Total: <?php echo mysqli_num_rows($result) ?></p>

    </body>
</html>