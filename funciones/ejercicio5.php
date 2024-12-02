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
            function contar_letra($palabra, $letra){
                $cont = 0;
                
                for ($i=0; $i < strlen($palabra); $i++) { 
                    if($palabra[$i] == $letra) $cont++;
                }
                echo "<p>Hay ".$cont." \"".$letra."\" en toda la frase</p>";
            }

            $palabra = $_POST["frase"];
            $letra = $_POST["letra"];

            contar_letra($palabra, $letra);


        }else{
    ?>
    <form action="ejercicio5.php" method="post" enctype="multipart/form-data">
        <input type="text" name="frase" placeholder="Introduce una palabra">
        <input type="text" name="letra" placeholder="Introduce un caracter">
        <p>Case sensitive</p>
        <input type="radio" name="radio" value="1">
        <p>Case NO sensitive</p>
        <input type="radio" name="radio" value="2">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>