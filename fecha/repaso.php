<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $time = time();
        $fecha = date("Y-m-d H:i:s", $time);
        $date2 = date("d", $time);
        echo "Time ->".$time;
        echo "fecha ->".$fecha;
        echo "date d ->".$date2;
        echo "getdate(timestamp) d ->".getdate($time);
    ?>
</body>
</html>