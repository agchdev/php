<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_FILES["img"]["tmp_name"])){
            header("Location:ejercicio4Form.php?err=1");
        }elseif(($_FILES["img"]["size"]/(2**20)) >= 2){
            header("Location:ejercicio4Form.php?err=2");
        }elseif(empty($_POST["num"])){
            // header("Location:ejercicio4Form.php?err=3"); 
        }else{
            $ruta = "./imgs/";

            if(!file_exists($ruta)){
                mkdir($ruta);
            }

            $origen = $_FILES["img"]["tmp_name"];
            $nomOrig = $_FILES["img"]["name"];
            $destino = $ruta.$nomOrig;
            $num = $_POST["num"];

            move_uploaded_file($destino, $origen);

            echo "<table>";

            echo "</table>";

        }
    ?>
</body>
</html>