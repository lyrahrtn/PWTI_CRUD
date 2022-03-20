<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $alamat_malang = $_POST['alamat_malang'];
    $alamat_asal = $_POST['alamat_asal'];

    // buat query
    $query = "INSERT INTO dataalamat (nim, nama, no_hp, alamat_malang, alamat_asal) VALUE ('$nim', '$nama', '$no_hp', '$alamat_malang', '$alamat_asal')";
    $result = mysqli_query($db, $query);
    $num = mysqli_affected_rows($db);

    // apakah query simpan berhasil?
    if( $num>0 ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: read.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "Gagal tambah data";
    }


} else {
    die("Akses dilarang...");
}

?>