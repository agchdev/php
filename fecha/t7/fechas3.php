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
            $dia = $_POST["dia"];
            $mes = $_POST["mes"];
            $anio = $_POST["anio"];
            if(checkdate($mes, $dia, $anio)){
                $secFN = mktime(0,0,0,$mes,$dia,$anio);
                $hoy = time();

                if($secFN < $hoy){
                    $dif= $hoy - $secFN;

                    $totAnios = $dif / (3600 * 24 * 365);

                    if($totAnios >= 18)
                        echo "Eres mayor de edad.";
                    else
                        echo "No eres mayor de edad.";

                    $arr = getdate($hoy);

                    if($dia == $arr["mday"] && $mes == $arr["mon"])
                        echo "<br>¡Feliz cumpleaños!";
                }else header("Location: fechas3.php");
            } else header("Location: fechas3.php");
        }
        else{
    ?>
        <form action="#" method="post">
            <label for="dia">Introduce el dia:</label>
            <input type="number" name="dia">
            <br>
            <label for="mes">Introduce el mes:</label>
            <input type="number" name="mes">
            <br>
            <label for="anio">Introduce el dia:</label>
            <input type="number" name="anio">
            <br>
            <input type="submit" value="Enviar" name="envio">
        </form>
    <?php } ?>

</body>
</html>