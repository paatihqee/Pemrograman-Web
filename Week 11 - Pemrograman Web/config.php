<?php
$databaseHost = "localhost";
$databaseUsername = "root";
$databasePassword = "";
$databaseName = "crud_db";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(!mysqli) die("Gagal mas bro, karena " . mysqli_connect_error());
echo "Mantap berhasil mas bro";
mysqli_close($mysqli);
?>