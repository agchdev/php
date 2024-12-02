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

            // DEVUELVE LA TABLA CON LAS NOTAS
            function mostrarTabla(){
                $asig = ["Matemáticas", "Lengua", "Historia", "Dibujo"];

                echo "<table>";
                foreach ($asig as $key) {
                    $nota = compNota($_POST[$key]);
                    echo"<tr>";
                    echo "<td>$key</td><td>$nota</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            
            // COMPRUEBA LA NOTA DEL EXAMEN Y TE DEVUELVE UN STRING
            function compNota($nota){
                if($nota < 5){
                    return $nota = "Insuficiente";
                }elseif ($nota == 5) {
                    return $nota = "Suficiente";
                }elseif ($nota == 6) {
                    return $nota = "Bien";
                }elseif ($nota == 7 || $nota == 8) {
                    return $nota = "Notable";
                }elseif ($nota == 9 || $nota == 10) {
                    return $nota = "Sobresaliente";
                }
            }

            mostrarTabla();
        }else{
    ?>
    <!-- CREACION DE FORMULARIO -->
    <form action="ejercicio7.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nombre" placeholder="Tu nombre">
        <input type="number" name="Matemáticas" placeholder="Nota de mates">
        <input type="number" name="Lengua" placeholder="Nota de lengua">
        <input type="number" name="Historia" placeholder="Nota de historia">
        <input type="number" name="Dibujo" placeholder="Nota de Dibujo">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>