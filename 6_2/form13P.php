<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $lon = sizeof($_POST)/2;
        $arrNom = array();

        for($i = 1; $i <= $lon; $i++){
            $arrNom[] = $_POST["ape".$i]." ".$_POST["nom".$i];
        }

        sort($arrNom);

        foreach($arrNom as $noms) echo $noms."<br>";
    ?>
</body>
</html>