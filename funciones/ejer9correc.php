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

        function get_dias_mes( int $mes, int $anio ){
            $time = mktime(0,0,0,$mes, 1, $anio);
            
            $diaTot = intval(date("t", $time));

            return $diaTot;
        }

        function impr_dias( int $numDia, string $color){
            return '<td style="background-color: '.$color.'">'.$numDia.'</td>';
        }

        function is_fest( int $dia, int $mes, int $anio){
            $festivos = ["1-1", "6-1", "28-2", "1-5", "15-8", "12-10", "1-11", "6-12", "25-12"];

            $diaMes = "$dia-$mes";
            
            array_search($diaMes, $festivos);
        }

        function impr_mes( int $mes, int $anio ){
            $diaSem = get_ini_mes($mes, $anio);

            $totIter = get_dias_mes($mes, $anio) + $diaSem - 1;
            $dias = 1;

            echo "<table><tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr>";

            for($i = 1; $i <= $totIter; $i++){
                if($i%7 == 1) echo "<tr>";

                if( $i >= $diaSem ) {
                    if( $i%7 >= 1 && $i%7 <= 5) echo impr_dias($dias++, "green");
                    else echo impr_dias($dias++, "red");
                }
                
                else echo "<td></td>";

                if($i%7 == 0) echo "</tr>";
            }

            echo "</table>";

            
        }
        impr_mes(11, 2024);
    ?>
</body>
</html>