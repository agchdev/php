<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function get_ini_mes( int $mes, int $anio ){
            $time = mktime(0,0,0,$mes, 1, $anio);
            
            $diaSem = getdate($time)["wday"];

            return $diaSem;
        }

        function get_dias_mes( int $mes, int $anio){
            $time = mktime(0,0,0,$mes, 1, $anio);
            
            $diaTot = intval(date("t", $time));

            return $diaTot;
        }

        function impr_dias( int $numDia, string $color){
            return '<td style="background-color: '.$color.'">'.$numDia.'</td>';
        }

        function is_fest( int $dia, int $mes){
            $festivos = ["1-1", "6-1", "28-2", "1-5", "15-8", "12-10", "1-11", "6-12", "25-12"];

            $diaMes = "$dia-$mes";
            
            if(array_search($diaMes, $festivos)){
                return true;
            }else{
                return false;
            }
        }

        function impr_mes( int $mes, int $anio, string $cFSEM, string $cSEM, string $cFEST ){
            $diaSem = get_ini_mes($mes, $anio);
            if ($diaSem == 0) $diaSem = 7;
            
            $totIter = get_dias_mes($mes, $anio) + $diaSem - 1;
            $dias = 1;

            echo "<table><tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr>";

            for($i = 1; $i <= $totIter; $i++){
                if($i%7 == 1) echo "<tr>";

                if( $i >= $diaSem ) {
                    if(is_fest($dias,$mes)){
                        echo impr_dias($dias++, $cFEST);
                    }else{
                        if( $i%7 >= 1 && $i%7 <= 5){
                            echo impr_dias($dias++, $cSEM);
                        }else{
                            echo impr_dias($dias++, $cFSEM);
                        }
                    }
                }
                
                else echo "<td></td>";

                if($i%7 == 0) echo "</tr>";
            }

            echo "</table>";

            
        }

        if(isset($_POST["Enviar"])){
            impr_mes($_POST["mes"], 2024, $_POST["colorFSEM"], $_POST["colorSEM"], $_POST["colorFEST"] );
        }else{
    ?>
    <form action="ejer9correc.php" method="post" enctype="multipart/form-data">
        <select name="mes">
            <option value=1 default>Enero</option>
            <option value=2>Febrero</option>
            <option value=3>Marzo</option>
            <option value=4>Abril</option>
            <option value=5>Mayo</option>
            <option value=6>Junio</option>
            <option value=7>Julio</option>
            <option value=8>Agosto</option>
            <option value=9>Septiembre</option>
            <option value=10>Octubre</option>
            <option value=11>Noviembre</option>
            <option value=12>Diciembre</option>
        </select>
        <label for="colorFEST">Introduce el color del dia festivo</label>
        <select name="colorFEST">
            <option value="red" default>rojo</option>
            <option value="blue">azul</option>
            <option value="yellow">amarillo</option>
            <option value="white">blanco</option>
            <option value="purple">morado</option>
        </select>
        <label for="colorSEM">Introduce el color del dia de la semana</label>
        <select name="colorSEM">
            <option value="red" default>rojo</option>
            <option value="blue">azul</option>
            <option value="yellow">amarillo</option>
            <option value="white">blanco</option>
            <option value="purple">morado</option>
        </select>
        <label for="colorFSEM">Introduce el color de los fines de semana</label>
        <select name="colorFSEM">
            <option value="red" default>rojo</option>
            <option value="blue">azul</option>
            <option value="yellow">amarillo</option>
            <option value="white">blanco</option>
            <option value="purple">morado</option>
        </select>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>