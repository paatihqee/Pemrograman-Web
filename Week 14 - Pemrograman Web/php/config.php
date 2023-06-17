<?php
// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'to_do_list_app';

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>