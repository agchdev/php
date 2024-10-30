<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["enviar"])) {
            if (empty($_POST["usu"])) {
                header("Location:ejercicio7.php?err=1");
            }elseif (empty($_FILES["file"]["tmp_name"])) {
                header("Location:ejercicio7.php?err=2");
            }

            $ruta = "./usuarios/";

            if(!file_exists($ruta)){
                mkdir($ruta);
            }

            $nomUsu = $_POST["usu"];

            $rutaUsu = $ruta.$nomUsu."/";

            if(!file_exists($rutaUsu)){
                mkdir($rutaUsu);
            }

            $origen = $_FILES["file"]["tmp_name"];
            $nombreArchivo = $_FILES["file"]["name"];
            $destino = $rutaUsu.$nombreArchivo;

            move_uploaded_file($origen, $destino);

            echo $nombreArchivo = $_FILES["file"]["name"];
            header("Location:ejercicio7.php?archivo=$nombreArchivo/$nomUsu");
        }else{
    ?>
    <form action="ejercicio7.php" method="post" enctype="multipart/form-data">
    <?php
        if (isset($_GET["archivo"])) {
            $Nomarchivo = explode("/",$_GET["archivo"]);

            echo "<p style=\"color:green;\">el archivo ".$Nomarchivo[0].", del usuario
             ".$Nomarchivo[1]." ha sido subido correctamente</p>";
        }
        ?>
        <?php
        if (isset($_GET["err"])) {
            if ($_GET["err"] == 1) echo "<p style=\"color:red;\">Introduce un usario</p>";
        }
        ?>
        <input type="text" name="usu" placeholder="Introduce un nombre de usuario...">
        <br>
        <?php
        if (isset($_GET["err"])) {
            if ($_GET["err"] == 2) echo "<p style=\"color:red;\">Introduce un archivo</p>";
        }
        ?>
        <input type="file" name="file">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>