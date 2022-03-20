<?php

include("config.php");

if( isset($_GET['nim']) ){

    // ambil id dari query string
    $nim = $_GET['nim'];

    // buat query hapus
    $sql = "DELETE FROM dataalamat WHERE nim=$nim";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: read.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>