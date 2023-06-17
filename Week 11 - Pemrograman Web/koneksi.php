<?php
$host = mysql_connect("localhost","root","xxx");
if ($host) echo "koneksi host berhasil";
else echo "koneksi host gagal";

$db = mysql_select_db("konekdb");
if ($db) echo "koneksi db berhasil";
else echo "koneksi db gagal";
?>