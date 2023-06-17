<?php
if(isset($_POST['Proses'])){
    $saran = $_POST['saran'];
    echo "Kritik dan Saran : <br>";
    echo "<b><font color='red'>$saran</font></b>";
}
?>