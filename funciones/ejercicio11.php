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

        function quitaEspacios(){
            $nombre = $_POST["nombre"];
            $palabra = str_replace(" ", "_",$nombre);
            echo "<p>$palabra</p>";
            if(preg_match("'(?=.*[a-zA-Z0-9])^.*$'", $palabra)){
                echo "correcto";
            }
        }

        function tamanio(){
            $size = $_FILES["file"]["size"]/(2**20);
            return $size
        }

        function existCarpeta(){

        }

        quitaEspacios();
    }else{
    ?>
    <form action="ejercicio11.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Introduce el nombre">
        <input type="text" name="carpeta" placeholder="Introduce el nombre de una carpeta">
        <input type="file" name="file">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>