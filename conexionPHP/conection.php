<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $db = new mysqli('localhost', 'root', '', 'centro');
        
        $result = $db->query('select * from alumnos');

        echo $result->num_rows."<br>";

        $fila = $result->fetch_array(MYSQLI_ASSOC);

        // foreach ($fila as $key => $value) echo "$key: $value <br>";

        // while($fila != null){
        //     foreach ($fila as $key => $value) echo "<b>$key:</b> $value <br>";

        //     $fila = $result->fetch_array(MYSQLI_ASSOC);
        // }

        $matriz = $result->fetch_all(MYSQLI_ASSOC);

        foreach ($matriz as $filas) {
            foreach ($filas as $columna => $valor) {
                echo "$columna:$valor";
                echo "<br>";
            }
        }

        $db->close();
    ?>
</body>
</html>