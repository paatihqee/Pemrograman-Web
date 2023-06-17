<?php

if( !isset($_GET['id'])){
    header('location:list-siswa.php');
}


$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_array($query);

if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

?>