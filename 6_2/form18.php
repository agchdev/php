<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $_POST["fondo"] ?>">
    <p style="color: <?php echo $_POST["letra"] ?>; font-family: <?php echo $POST["tipoL"] ?> ">Hola usuario</p>

    <img src="<?php echo $_POST["img"] ?>" width=200px>

</body>
</html>