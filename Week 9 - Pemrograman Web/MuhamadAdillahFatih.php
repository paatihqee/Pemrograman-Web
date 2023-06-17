<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h4>Program Hitung Gaji Pegawai</h4>
    <form action="" method="post">
      NIM : <br />
      <input type="text" name="nim" /> <br />
      <br />
      Nama Pegawai : <br />
      <input type="text" name="nama_pegawai" /> <br />
      <br />
      Gaji Pokok : <br />
      <input type="number" name="gaji_pokok" /> <br />
      <br />
      Bonus : <br />
      <input type="number" name="bonus" /> <br />
      <br />
      <input type="submit" name="hitung" value="Hitung" />
    </form>
  </body>
</html>

<?php
if(isset($_POST['hitung'])){
  $nim = $_POST['nim'];
  $nama_pegawai = $_POST['nama_pegawai'];
  $gaji_pokok = $_POST['gaji_pokok'];
  $bonus = $_POST['bonus'];

  $tunjangan = 0.05 * $gaji_pokok;
  $gaji_total = $gaji_pokok + $bonus + $tunjangan;
  $pajak = 0.1 * $gaji_pokok;
  $gaji_dibayarkan = $gaji_total - $pajak;

  echo "<h4>Detail Gaji</h4>";
  echo "==============================<br> <br>";
  echo "NIM : $nim <br>";
  echo "Nama Pegawai : $nama_pegawai <br> <br>";
  echo "==============================<br> <br>";
  echo "Gaji Pokok : $gaji_pokok <br>";
  echo "Bonus : $bonus <br>";
  echo "Tunjangan : $tunjangan <br>";
  echo "Pajak : $pajak <br> <br>";
  echo "==============================<br> <br>";
  echo "Gaji yang harus dibayarkan : <b>Rp.$gaji_dibayarkan<b>";
}
?>