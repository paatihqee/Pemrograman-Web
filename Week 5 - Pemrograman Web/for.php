<!-- // Program 3.7 -->
<!-- // Program struktur perulangan For dan beberapa variasinya -->
<?php
// Contoh 1
for($i = 1; $i <= 10; $i++){
    echo "$i ";
}
echo "<br/><br/>";

// Contoh 2
for ($i = 1; ;$i++) {
    if ($i > 10){
        break;
    }
    echo "$i ";
}
echo "<br/><br/>";

// contoh 3
$i = 1;
for (; ; ) {
    if($i > 10){
        break;
    }
    echo "$i ";
    $i++;
}
echo "<br/><br/>";

// contoh 4
for ($i = 1; $i <= 10; print"$i ", $i++);
?>