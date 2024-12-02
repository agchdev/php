<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function boletin($arr){
        $media = 0;
        $cont = 0;

        foreach ($arr as $key => $value) {
            echo $key.": ".$value."<br>";
            if(preg_match("'^Nota'", $key)){
                $media += $value;
                $cont++;
            }
        }
        $media /= $cont;

        echo "Media: $media<br><br>";
    }

    if (isset($_POST["enviar"])) {
        $i = 1;
        $arr = array();

        foreach ($_POST as $key => $value) {
            if(preg_match("'^".$i."'", $key)){
                $nKey = substr($key, 1);
                $arr[$nKey] = $value;
            }else{
                boletin($arr);
                $arr = array();

                $i++;
                $nKey = substr($key, 1);
                $arr[$nKey] = $value;
            }
        }
    }else{
    ?>
    <form action="#" method="post">
        <?php
            for($i = 1; $i <= 3; $i++){
                echo '<label for="'.$i.'Nombre">'.$i.'Nombre</label>';
                echo '<input type="text" name="'.$i.'Nombre">';
                echo '<label for="'.$i.'Apellidos">'.$i.'Apellidos</label>';
                echo '<input type="text" name="'.$i.'Apellidos">';

                for ($j=1; $j <= 3; $j++) { 
                    echo '<label for="'.$i.'Nota'.$j.'">Nota'.$j.'</label>';
                    echo '<input type="number" name="'.$i.'Nota'.$j.'">';
                }
                echo "<br>";
            }
        ?>

        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>