<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota = 0;
        $i = 1;

        foreach($_POST as $resp){
            if(strcmp($resp, "v") == 0) $nota++;
            else{
                echo "La respuesta correcta de la pregunta $i es $resp<br>";
            }

            $i++;
        }

        echo "Tu nota es $nota";
    ?>
</body>
</html>