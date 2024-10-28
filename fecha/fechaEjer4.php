<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["submit"])) {
        $fecha = strtotime($_POST["fech"]);
        $formFecha=date("l", $fecha);
        echo "<br>".$formFecha;
    }else{
    ?>
    <form action="fechaEjer1.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce la fecha de devolución: </label>
        <input type="date" name="fech" id="">
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>