<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["submit"])) {
        $fecha = strtotime($_POST["fech"]);
        $nm = $_POST["mesNext"];
        $pm = $_POST["mesPrev"];
        echo "<br>".$nm;
    }else{
    ?>
    <form action="fechaEjer5.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce tu cumpleaños: </label>
        <input type="date" name="fech" id="">
        <br>
        <input type="checkbox" name="mesNext">
        <label for="mesNext">ver mes siguiente</label>
        <br>
        <input type="checkbox" name="mesPrev">
        <label for="mesNext">ver mes anterior</label>
        <br>
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>