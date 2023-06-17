<?php
if(isset($_POST['input'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "uchiha" && $pass == "jokowi") {
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
?>