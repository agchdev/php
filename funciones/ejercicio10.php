<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["enviar"])) {
        $i = 1;
        $arr = array();

        foreach ($_POST as $key => $value) {
            if(preg_match("'^$i'", $key)){
                $key = strstr($key, "$i")
                $arr = [$nKey => $value];
            }else{
                
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
                    echo '<label for="'.$i.'Nota">Nota '.$j.'</label>';
                    echo '<input type="number" name="'.$j.'Nota'.$j.'">';
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