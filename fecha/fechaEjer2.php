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
        $fecha1 = strtotime($_POST["fech1"]); //Fecha a segundos
        $fecha2 = strtotime($_POST["fech2"]); //Fecha a segundos
        $fechaFinal = $fecha1 - $fecha2;
        if($fechaFinal<0) $fechaFinal*=-1;
        $fechaFinal/=86400;
        echo "<br>".$fechaFinal." Dias han pasado entre la fecha ".$_POST["fech1"]." y la fecha ".$_POST["fech2"];
    }else{
    ?>
    <form action="fechaEjer2.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce la primera fecha: </label>
        <input type="date" name="fech1" id="">
        <br>
        <label for="fech">Introduce la segunda fecha: </label>
        <input type="date" name="fech2" id="">
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>