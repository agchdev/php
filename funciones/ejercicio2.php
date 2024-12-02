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
                $palabra = strtolower($palabra);
                $letra = $palabra[0];
                $letra = strtoupper($letra);
                $palabra[0] = $letra;
                echo $palabra;
            }

            $palabra = $_POST["frase"];

            corregir_primera_letra($palabra);


        }else{
    ?>
    <form action="ejercicio2.php" method="post" enctype="multipart/form-data">
        <input type="text" name="frase">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>