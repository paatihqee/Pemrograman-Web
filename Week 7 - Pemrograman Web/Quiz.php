<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Validasi</title>
  </head>
  <body>
    <form action="" method="POST" name="input">
      <h2>PHP Form Validation</h2>
      <p style="color: red">* wajib diisi</p>
      <p>Name: <input type="text" name="name" required /> <span style="color: red">*</span><br /></p>
      <p>E-mail: <input type="email" name="email" required /> <span style="color: red">*</span><br /></p>
      <p>Website: <input type="text" name="website" /><br /></p>
      <p>Comment: <textarea name="comment" cols="40" rows="5"></textarea><br /></p>
      Gender:
      <input type="radio" name="gender" value="Male" checked />
      Laki-laki
      <input type="radio" name="gender" value="Female" />
      Perempuan <br />
      <span style="color: red" required>*</span><br />
      <input type="submit" name="Submit" value="Submit" />
    </form>
  </body>
</html>

<?php
if (isset($_POST['Submit'])) {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];

    echo "<h2>Your Input: </h2> <br>";
    echo "$nama <br> 
    $email <br> 
    $website <br> 
    $comment <br> 
    $gender";
}
?>
