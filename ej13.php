<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<?php
        
    for ($i = 1; $i <= 10; $i++) {
        echo "<table border=1 width=225px height=50px>
            <tr>
                <th colspan=10>Tabla de multiplicar del $i</th>
            </tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" .  $i * $j . "</td>";
        }

        echo "</table>";
        echo "<br>";
    }        

?>

</body>
</html>