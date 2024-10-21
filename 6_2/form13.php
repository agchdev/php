<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form13P.php" method="POST" enctype="multipart/form-data">
        <?php
            for($i = 1; $i <= 5; $i++){
                echo '<input type="text" name="nom'.$i.'" placeholder="introduce el nombre">';
                echo '<input type="text" name="ape'.$i.'" placeholder="introduce el apellido">';
                echo "<br>";
            }

        ?>
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>