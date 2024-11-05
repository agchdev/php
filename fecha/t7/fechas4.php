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
            $fecha = $_POST["fecha"];
            $fEntrega = strtotime($fecha);

            $arr = getdate();
            $hoy = mktime(0,0,0, $arr["mon"], $arr["mday"], $arr["year"]);

            if($fEntrega == $hoy)
                echo "Has entregado el libro el mismo día de la fecha límite.";
            else{
                $dias = $fEntrega - $hoy;

                if( $dias > 0 ){
                    $dias /= (24*3600);

                    echo "Lo has estregado con $dias de antelación.";
                }else{
                    $dias /= (24*3600) * -1;
                    $multa = $dias * 3;

                    echo "Has entregado el libro $dias tarde, tienes una multa de $multa euros.";
                }
            }
        }
        else{
    ?>
        <form action="#" method="post">
            <label for="fecha">Introduce la fecha de devolución del libro:</label>
            <input type="date" name="fecha">
            <br>
            <input type="submit" value="Enviar" name="envio">
        </form>
    <?php } ?>

</body>
</html>