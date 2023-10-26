<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<?php

$num = 9;
$esPrimo = false;

if ($num == 1 || $num == 2 || $num == 3) {
    echo "$num es un número primo.";
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $esPrimo = false;
            break;
        } else {
            $esPrimo = true;
        }
    }
    
    if ($esPrimo == true) {
        echo "$num es un número primo.";
    } else {
        echo "$num no es un número primo.";
    }
}

?>
</body>
</html>