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
        $fechaMayor = time();
        $fechaMayor -= 568025136;
        $fecha = strtotime($_POST["fech"]);
        echo $fecha." < ".$fechaMayor."<br>";
        if($fecha < $fechaMayor) echo "Es mayor de edad";
        else echo "Es menor de edad";
        
    }else{
    ?>
    <form action="fechaEjer3.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce tu cumpleaños: </label>
        <input type="date" name="fech" id="">
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>