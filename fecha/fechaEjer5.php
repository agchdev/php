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
        $fecha = date("m", $fecha);
        $diaMes;
        switch ($fecha) {
            case '01': $diaMes = 31;break;
            case '02': $diaMes = 28;break;
            case '03': $diaMes = 31;break;
            case '04': $diaMes = 30;break;
            case '05': $diaMes = 31;break;
            case '06': $diaMes = 30;break;
            case '07': $diaMes = 31;break;
            case '08': $diaMes = 31;break;
            case '09': $diaMes = 30;break;
            case '10': $diaMes = 31;break;
            case '11': $diaMes = 30;break;
            case '12': $diaMes = 31;break;
          }

        if(isset($_POST["mesNext"])){
            echo "hola";
        }   
        echo "<table>";
        echo "<tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
        for ($i=1; $i <= $diaMes; $i++) { 
            for ($i=1; $i <= 7; $i++) { 
                
            }
        }
        echo "</table>";
        if(isset($_POST["mesPrev"])){
            echo "hola";
        }

    }else{
    ?>
    <form action="fechaEjer5.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce tu cumpleaños: </label>
        <input type="date" name="fech" id="">
        <br>
        <input type="checkbox" name="mesNext">
        <label for="mesNext">ver mes siguiente</label>
        <br>
        <input type="checkbox" name="mesPrev">
        <label for="mesPrev">ver mes anterior</label>
        <br>
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>