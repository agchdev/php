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
            $fecha = $_POST["date"];
        }else{
    ?>
    <form action="ejercicio8.php" method="post" enctype="multipart/form-data">
        <input type="date" name="fecha">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>