<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["envio"])){
            $sec1 = strtotime($_POST["fecha1"]);
            $sec2 = strtotime($_POST["fecha2"]);

            $dif = $sec1 - $sec2;
            $dif = abs($dif);

            $totDias = intval($dif / (3600*24));

            echo "Hay un total de $totDias dias de diferencia entre ".date("d/m/Y", $sec1)." y ".date("d/m/Y", $sec2);
        }
        else{
    ?>
        <form action="#" method="post">
            <label for="fecha1">Introduce la fecha 1:</label>
            <input type="date" name="fecha1">
            <br>
            <label for="fecha2">Introduce la fecha 2:</label>
            <input type="date" name="fecha2">
            <br>
            <input type="submit" value="Enviar" name="envio">
        </form>
    <?php } ?>

</body>
</html>