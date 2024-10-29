<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 1rem;
            border: 1px solid black;
        }
        .select{
            background-color: green;
        }
    </style>
</head>
<body>
<?php
    if (isset($_POST["submit"])) {
        $fecha = strtotime($_POST["fech"]);
        $dia = explode("-",$_POST["fech"]);
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
        
        // CONTAR LAS SEMANAS DEL MES
        $semanas = $diaMes/7;
        if ($diaMes%7 != 0) {
            $semanas++;
        }

        $contDias = 0;
        // MES PREVIO
        if(isset($_POST["mesPrev"])){
            echo "<table>";
            echo "<tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
            for ($i=1; $i <= $semanas; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= 7; $j++) { 
                    
                    if($contDias<$diaMes){
                        echo "<td>$contDias</td>";
                    }
                    $contDias++;
                }
                echo "</tr>";
            }
        }   

        $contDias = 0;

        // MES PRINCIPAL
        echo "<table>";
        echo "<tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
        for ($i=1; $i <= $semanas; $i++) { 
            echo "<tr>";
            for ($j=1; $j <= 7; $j++) { 
                if($dia[2] == $contDias)echo "<td class=\"select\">$contDias</td>";
                elseif($contDias<$diaMes){
                    echo "<td>$contDias</td>";
                }
                $contDias++;
            }
            echo "</tr>";
        }
        echo "</table>";

        $contDias = 0;
        // MES SIGUIENTE
        if(isset($_POST["mesNext"])){
            echo "<table>";
            echo "<tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sábado</th><th>Domingo</th></tr>";
            for ($i=1; $i <= $semanas; $i++) { 
                echo "<tr>";
                for ($j=1; $j <= 7; $j++) { 
                    
                    if($contDias<$diaMes){
                        echo "<td>$contDias</td>";
                    }
                    $contDias++;
                }
                echo "</tr>";
            }
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