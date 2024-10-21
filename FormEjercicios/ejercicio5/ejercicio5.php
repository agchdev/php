<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nomCompleto = $_POST["nom"]." ".$_POST["apell"];
        $curso = $_POST["cur"];
        $notas = [$_POST["not0"], $_POST["not1"], $_POST["not2"], $_POST["not3"]];
        $media = 0;

        foreach ($notas as $key) {
            $media += $key;
        }

        $media /= count($notas);

        echo $media;

        echo "<table>";
        echo "<tr><th>Nombre y apellidos</th><th>$nomCompleto</th></tr>";
        echo "<tr><th>Curso</th><th>$curso</th></tr>";
        for($i=0; $i < count($notas); $i++) {
            echo "<tr><td>Nota $i</td><td>".$notas[$i]."</td></tr>";
        }
        echo "<tr><td>Nota media</td><td>".$media."</td></tr>";
        echo "</table>";
    ?>
</body>
</html>