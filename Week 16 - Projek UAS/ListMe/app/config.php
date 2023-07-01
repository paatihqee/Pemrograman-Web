<?php
// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'listme_db';

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
