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
        $fechaEntrega = strtotime($_POST["fechEntrega"]);
        $fechaEntregado = strtotime($_POST["fechEntregado"]);
        if($fechaEntrega < $fechaEntregado){
            $diasRetraso = ($fechaEntregado - $fechaEntrega)/86400;
            $pago = $diasRetraso*3;
            echo "Llevas ".$diasRetraso." días de retraso. Tienes que pagar ".$pago."€";
        }else{
            echo "Todo correcto!!";
        }
    }else{
    ?>
    <form action="fechaEjer4.php" method="post" enctype="multipart/form-data">
        <label for="fechEntrega">Introduce la fecha de devolución: </label>
        <input type="date" name="fechEntrega">
        <label for="fechEntregado">Introduce la fecha que lo entregas: </label>
        <input type="date" name="fechEntregado">
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>