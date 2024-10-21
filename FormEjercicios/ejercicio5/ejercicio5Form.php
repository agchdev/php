<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- EJERCICIO 5
Crear una única página Web que estará dividida en dos partes. En la parte
superior habrá un formulario donde se pedirán los datos personales del
usuario, así como las notas que ha sacado en los últimos 4 exámenes. En la
parte inferior, habrá una tabla que representará el boletín de notas del alumno.
Para ello se verá una tabla como la de abajo: -->
    <form action="ejercicio5.php" method="Post" enctype="multipart/form-data">

        <p>Introduce nombre:</p>
        <input type="text" name="nom" placeholder="Nombre" require>
        <p>Introduce apellido:</p>
        <input type="text" name="apell" placeholder="Apellido" require>
        <p>Introuce el curso:</p>
        <input type="text" name="cur" placeholder="Curso" require>

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo '<p>Introuce la nota '.$i.':</p>';
                echo '<input type="number" name="not'.$i.'" placeholder="nota'.$i.'" require>';
            }
        ?>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body> 
</html>