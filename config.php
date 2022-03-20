<?php

$host = "localhost";
$user = "root";
$pass = "lyramisu";
$db_name = "datamahasiswa";

$db = mysqli_connect($host, $user, $pass, $db_name);

if( !$db ){
    die("Gagal koneksi database: " . mysqli_connect_error());
}

?>