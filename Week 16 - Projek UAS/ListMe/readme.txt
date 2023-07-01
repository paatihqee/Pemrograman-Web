if($_SESSION['status'] != "login")
{
  header("location:index.php?pesan=belum_login");
}

included in: semua file kecuali login.php, logout.php, dan index.php
digunakan untuk mengecek apakah sudah login apa belum, untuk menghindari user mengakses halaman yang diperlukan autentikasi.

$_SESSION['status'] = "login";

included in: login.php
digunakan untuk mengirim status login agar menandakan user telah melewati tahap autentikasi.

$_SESSION['uname'] = $username atau $_SESSION['uname'] = $uname[2];

included in: login.php
digunakan untuk mengirim data berupa username dengan fungsi $_SESSION dengan status 'uname'.

$_SESSION['pwd'] = $pwd;

included in: login.php
digunakan untuk mengirim data berupa password dengan fungsi $_SESSION dengan status 'pwd'.

$uname = $_SESSION['uname'] dan $pwd = $_SESSION['pwd'];

included in: add.php, edit.php, workspace.php
variabel yang digunakan untuk menerima kiriman data dari fungsi $_SESSION.
