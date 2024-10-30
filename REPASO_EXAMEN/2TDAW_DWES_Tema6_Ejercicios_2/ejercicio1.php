<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["enviar"])) {

            if(empty($_FILES["img1"]["name"]) || empty($_FILES["img2"]["name"]) || empty($_POST["nameImg1"])){
                if(empty($_FILES["img1"]["name"])){ // Comprueba si está vacio
                    header("Location:ejercicio1.php?error=1");
                }
                if(empty($_FILES["img2"]["name"])){ // Comprueba si está vacio
                    header("Location:ejercicio1.php?error=2");
                }
                if(empty($_POST["nameImg1"])){ // Comprueba si está vacio
                    header("Location:ejercicio1.php?error=5");
                }
            }

            $formatoImg1 = explode("/", $_FILES["img1"]["type"]);
            $frmImg1 = $formatoImg1[0];

            $formatoImg2 = explode("/", $_FILES["img2"]["type"]);
            $frmImg2 = $formatoImg2[0];
            if($frmImg1 != "image"){
                header("Location:ejercicio1.php?error=3");
            }elseif($frmImg2 != "image"){
                header("Location:ejercicio1.php?error=4");
            }

            $ruta = "./imgs/";

            if(!file_exists($ruta)){
                mkdir($ruta);
            }

            $origenImg1 = $_FILES["img1"]["tmp_name"];
            $nuevoNom = $_POST["nameImg1"];
            $tam1 = $_FILES["img1"]["size"]/(2**20);
            
            if(!preg_match("'^.*\.[a-zA-Z]+$'", $nuevoNom)){
                $nuevoNom = $nuevoNom.".".$formatoImg1[1];
            }

            $destino1 = $ruta.$nuevoNom;

            move_uploaded_file($origenImg1, $destino1);


            $origenImg2 = $_FILES["img2"]["tmp_name"];
            $nameImg2 = $_FILES["img2"]["name"];
            $destino2 = $ruta.$nameImg2;
            $tam2 = $_FILES["img2"]["size"]/(2**20);

            move_uploaded_file($origenImg2, $destino2);

            if ($tam1 > $tam2) {
                echo "<img src=\"$destino1\"/>";
                echo "<img src=\"$destino2\"/>";
            }else{
                echo "<img src=\"$destino2\"/>";
                echo "<img src=\"$destino1\"/>";
            }


        }else{
    ?>
    <form action="ejercicio1.php" method="post" enctype="multipart/form-data">
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == 1) echo "DEBES INSERTAR ALGO";
                if($_GET["error"] == 3) echo "DEBES INSERTAR UNA IMAGEN";
                if($_GET["error"] == 5) echo "DEBES INTRODUCIR EL NUEVO NOMBRE DE LA IMAGEN";
            }
        ?>
        <label for="img1">Introduce una imagen:</label>
        <br>
        <input type="text" name="nameImg1" placeholder="pon un nombre...">
        <br>
        <input type="file" name="img1">
        <br>
        <br>
        <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == 2) echo "DEBES INSERTAR ALGO";
                if($_GET["error"] == 4) echo "DEBES INSERTAR UNA IMAGEN";
            }
        ?>
        <label for="img2">Introduce una imagen:</label>
        <br>
        <input type="file" name="img2">
        <br>
        <br><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php
        }
    ?>

</body>
</html>