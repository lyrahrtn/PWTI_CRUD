<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat_malang = $_POST['alamat_malang'];
    $alamat_asal = $_POST['alamat_asal'];

    // buat query update
    $sql = "UPDATE dataalamat SET nama='$nama', no_hp='$no_hp', alamat_malang='$alamat_malang', alamat_asal='$alamat_asal' WHERE nim=$nim";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: read.php');
    } else {
        // kalau gagal tampilkan pesan
        die('Gagal menyimpan perubahan...');
    }


} else {
    die('Akses dilarang...');
}

?>