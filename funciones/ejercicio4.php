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
            function contar_mayusculas($palabra){
                $cont = 0;
                
                for ($i=0; $i < strlen($palabra); $i++) { 
                    if(preg_match("'^[A-Z]'", $palabra[$i])) $cont++;
                }
                echo "<p>Hay $cont mayúsculas en toda la frase</p>";
            }

            $palabra = $_POST["frase"];

            contar_mayusculas($palabra);


        }else{
    ?>
    <form action="ejercicio4.php" method="post" enctype="multipart/form-data">
        <input type="text" name="frase">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>