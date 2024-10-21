<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="Post" enctype="multipart/form-data">
        <?php
            for ($i=0; $i <= 5; $i++) { 
                echo '<input type="text" name="nom'.$i.'" placeholder="Introduce el nombre">';
                echo '<input type="text" name="ape'.$i.'" placeholder="Introduce el apellido">';
                echo '<br>';
            }
        ?>
        <input type="submit" value="enviar datos">
    </form>
</body>
</html>