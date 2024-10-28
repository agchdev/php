<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fecha = time();

        $formFecha=date("d m Y", $fecha);

        $arr = explode(" ", $formFecha);

        $check = checkdate($arr[1], 43, $arr[2]);

        echo $formFecha;
        echo '<br>'.$check;

        $fechas = getdate();

        foreach($fechas as $key => $value)
        echo "$key: $value<br>";

        $hora = gettimeofday();

        foreach($hora as $key => $value)
            echo "$key: $value<br>";

        $fecha1= mktime(10, 15, 0, 10, 28, 2024);
        $fecha2= mktime(11, 51, 0, 10, 28, 2024);

        if ( $fecha1 < $fecha2 )
            echo "El primer instante de tiempo es anterior";
        else
        echo "El segundo instante de tiempo es anterior";
    ?>
</body>
</html>