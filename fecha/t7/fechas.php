<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        setlocale(LC_ALL, "es-ES");

        $time = time();

        $time2 = mktime(17, 24, 30, 5, 12, 2015);

        $time3 = strtotime("2012-04-16");

        $fechaForm = date("l d/m/Y H:i:s - e", $time3);

        echo strftime("%A %d de %B de %Y del siglo %C a las %H:%M:%S");

        setlocale(LC_ALL, "fr-FR");

        echo '<br>'.strftime("%A %d de %B de %Y del siglo %C a las %H:%M:%S");

        echo '<br>'.$fechaForm;
    ?>
</body>
</html>