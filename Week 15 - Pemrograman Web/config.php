<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'pendaftaran_siswa';

$db = mysqli_connect($server, $user, $password, $database);

if ( !$db ) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>