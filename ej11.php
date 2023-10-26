<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<ul>

    <?php

    $variable1 = 10;
    $variable2 = 30;

    for ($i = $variable1; $i <= $variable2; $i++) {
        if ($i % 3 == 0) {
            echo "<li>";
                echo $i;
            echo "</li>";
        }
    } 

    ?>
</ul>
</body>
</html>