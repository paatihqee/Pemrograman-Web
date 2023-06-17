<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran Siswa</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Montserrat";
      }

      header {
        text-align: center;
        padding: 20px;
        background-color: rgb(100, 126, 173);
        margin: 0px 0px 60px;
        color: white;
      }

      header h3 {
        margin-bottom: 30px;
      }

      h4 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 32px;
      }

      nav ul {
        display: flex;
        gap: 10px;
        text-decoration: none;
        list-style: none;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

      ul a {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60vw;
        height: 60px;

        color: white;
        border-radius: 10px;
        background-color: #0077ff;
        text-decoration: none;
        transition: ease 0.3s;
      }

      ul a:hover {
        background-color: white;
        border: 1px solid #0077ff;
        color: #0077ff;
        transition: ease 0.3s;
      }
    </style>
  </head>
  <body>
    <header>
      <h3>Pendaftaran Siswa Baru</h3>
      <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
      <?php
        if (isset($_GET['status'])):
      ?>
      <p>
        <?php
          if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran siswa baru berhasil!";
          } else {
            echo "Pendaftaran gagal!";
          }
        ?>
      </p>
      <?php endif; ?>
      <ul>
        <li><a href="form-daftar.php">Daftar Baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
      </ul>
    </nav>
  </body>
</html>
