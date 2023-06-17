<!-- // Program 3.8 -->
<!-- // Program struktur perulangan while dan beberapa variasinya -->
<?php
// Contoh 1
$i = 1;
while($i <= 10){
    echo $i++;
}
echo "<br/><br/>";

// contoh 2
$i = 1;
while($i <= 10):
    echo "$i";
    $i++;
endwhile;
echo "<br/><br/>";

// contoh 3
$i = 1;
while($i <= 6){
    echo "<h$i>Heading $i</h$i>";
    $i++;
}
?>