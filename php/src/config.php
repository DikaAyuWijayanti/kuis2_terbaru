<?php

$server = "10.0.0.246";
$user = "admin";
$password = "Dika1";
$nama_database = "db_kuis2";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>