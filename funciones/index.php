<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["enviar"])){
            function corregir_primera_letra($palabra){
                $letra = $palabra[0];
                echo $letra;
                if(preg_match("'^[A-Z]'", $letra)){
                    echo "<p>Empieza por Mayúscula</p>";
                }
            }

            $palabra = $_POST["frase"];

            corregir_primera_letra($palabra);


        }else{
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="frase">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>