<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran Siswa Baru</title>
  </head>
  <body>
    <header>
      <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
      <fieldset>
        <p>
          <label for="nama">Nama: </label>
          <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
          <label for="alamat">Alamat: </label>
          <textarea name="alamat" id="" cols="30" rows="3"></textarea>
        </p>
        <p>
          <label for="jenis_kelamin">Jenis Kelamin: </label>
          <label for=""><input type="radio" name="jenis_kelamin" value="Laki-laki" />Laki-laki</label>
          <label for=""><input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan</label>
        </p>
        <p>
          <label for="agama">Agama: </label>
          <select name="agama" id="">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kriten</option>
            <option value="Hindu">Hindu</option>
            <option value="Katholik">Katholik</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </p>
        <p>
          <label for="sekolah_asal">Sekolah Asal: </label>
          <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
          <input type="submit" value="Daftar" name="daftar" />
        </p>
      </fieldset>
    </form>
  </body>
</html>