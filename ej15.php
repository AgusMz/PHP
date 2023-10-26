<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<ol type="I">
    <?php

    $num = 100;

    if ($num <= 0) {
        echo "El número indicado es menor o igual a 0, por lo tanto no puede ser primo.";
    } else {
        if ($num > 3) {

            echo "<li> 1 </li>";
            echo "<li> 2 </li>";
            echo "<li> 3 </li>";

            for ($i = 4; $i <= $num; $i++) {
                $esPrimo = false;
            
                for ($j = 2; $j <= $i/2; $j++) {
                    if ($i % $j == 0) {
                        $esPrimo = false;
                        break;
                    } else {
                        $esPrimo = true;
                    }
                }
                
                if ($esPrimo) {
                    echo "<li> $i </li>";
                } else {
                    continue;
                }
            }
        } else if ($num <= 3) {
            for ($i = 1; $i <= $num; $i++) {
                echo "<li> $i </li>";
            }
        }
    }

    ?>
</ol>

</body>
</html>