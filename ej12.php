<!DOCTYPE html>
<html>
<body>

<h1>PHP</h1>

<table border="1">

<tr>
    <th>Tabla de multiplicar</th>
    <?php

    $num = 4;

        for ($i = $num; $i <= $num*10; $i = $i + 4) {
            $contador = 1;
            echo "<tr>";
                echo "<td> $i </td>";
            echo "</tr>";
        }

    ?>
</tr>

</table>

</body>
</html>