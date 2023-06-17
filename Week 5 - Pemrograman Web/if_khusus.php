<!-- // Program 3.6
// Program struktur kondisi khusus ? untuk memeriksa tahun kabisat -->
<?php
$tahun = date('Y');
$kabisat = ($tahun%4==0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> adalah $kabisat";
?>