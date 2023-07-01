<?php
session_start();
include_once('config.php');

if($_SESSION['status'] != "login")
{
    header("location:../index.php?pesan=belum_login");
}

$id = $_GET['id'];

$deleteQuery = "DELETE FROM lists_table WHERE id=$id";

$result = mysqli_query($conn, $deleteQuery);

header('location:index.php');
?>