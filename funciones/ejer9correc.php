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

        function impr_mes( int $mes, int $anio ){
            $diaSem = get_ini_mes($mes, $anio);

            $totIter = get_dias_mes($mes, $año) + $diaSem - 1;
            echo "<table><tr><th>L</th><th>M</th><th>X</th><th>J</th><th>V</th><th>S</th><th>D</th></tr>";

            for($i = 1; $i <= $totIter; $i++){
                
            }
        }
    ?>
</body>
</html>