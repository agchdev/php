<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 1</title>
</head>
<body>
    <?php
    if (isset($_POST["submit"])) {
        $fecha = $_POST["fech"];
        $arrayFecha = explode("-", $fecha);
        switch ($arrayFecha[1]) {
            case 1:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            
            case 2:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 3:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 4:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 5:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 6:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 7:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 8:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 9:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 10:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 11:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
            case 12:
                echo "<p>Messi</p>";
                echo "<img src=\"MESSI.jpg\">";
                break;
        }
    }else{
    ?>
    <form action="fechaEjer6.php" method="post" enctype="multipart/form-data">
        <label for="fech">Introduce tu cumpleaños: </label>
        <input type="date" name="fech" id="">
        <input type="submit" value="enviar" name="submit">
    </form>
    <?php
    }
    ?>
</body>
</html>