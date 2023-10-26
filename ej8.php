<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<?php

$num = 57;
$encontrado = false;
$left = 1;
$right = 100;

while ($encontrado == false) {

    $mitad = ($right + $left) / 2;

    if ($num < $mitad) {
        $right = $mitad - 1;
    } else if ($num > $mitad) {
        $left = $mitad + 1;
    } else if ($num == $mitad){
        $encontrado = true;
    }
}

if ($encontrado == true) {
    echo $num;
}

?>
</body>
</html>