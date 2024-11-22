<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Animales</title>
</head>
<body>
<?php
// index.php

// Incluir el archivo donde están las clases
include 'clases.php';

// Verificar si se han enviado los datos desde el formulario
    if (isset($_POST["enviar_perro"])) {
        $nombre_perro = $_POST["nombre_perro"];
        $color_perro = $_POST["color_perro"];
        $año_perro = $_POST["año_perro"];
        $raza_perro = $_POST["raza_perro"];
        $sexo_perro = $_POST["sexo_perro"];

        $perro = new Perro($nombre_perro, $color_perro, $año_perro, $raza_perro, $sexo_perro);

        if ($_POST['accion_perro'] == 'ladrar') {
            $perro->ladrar();
        } elseif ($_POST['accion_perro'] == 'dormir') {
            $perro->dormir();
        }
    
    } else if(isset($_POST["enviar_delfin"])) {
        $nombre_delfin = $_POST["nombre_perro"];
        $color_delfin = $_POST["color_delfin"];
        $año_delfin = $_POST["año_delfin"];
        $longitud_delfin = $_POST["longitud_delfin"];

        $delfin = new Delfin($nombre_delfin, $color_delfin, $año_delfin, $longitud_delfin);

        if ($_POST['accion_perro'] == 'ladrar') {
            $perro->ladrar();
        } elseif ($_POST['accion_perro'] == 'dormir') {
            $perro->dormir();
        }
    } else{
?>
<!-- Formulario para crear un Perro y un Delfín -->
<h1>Formulario de Animales</h1>
<form action="ejercicio4.php" method="POST">
    <h2>Datos del Perro</h2>
    <label for="nombre_perro">Introduce el nombre del perro:</label>
    <input type="text" name="nombre_perro" required><br>
    <label for="color_perro">Introduce el color del perro:</label>
    <input type="text" name="color_perro" required><br>
    <label for="año_perro">Introduce el año del perro:</label>
    <input type="number" name="año_perro" required><br>
    <label for="raza_perro">Introduce la raza del perro:</label>
    <input type="text" name="raza_perro" required><br>
    <label for="sexo_perro">Introduce el sexo del perro:</label>
    <input type="text" name="sexo_perro" required><br>
    <label for="accion_perro">Que está haciendo el perro:</label>
    <select name="accion_perro">
        <option value="ladrar">Ladrar</option>
        <option value="dormir">Dormir</option>
    </select><br>
    <input type="submit" name="enviar_perro" value="enviar_perro">
</form>
<br><br>
<form action="ejercicio4.php" method="POST">
    <h2>Datos del Delfín</h2>
    <label for="nombre_delfin">Introduce el nombre del delfin:</label>
    <input type="text" name="nombre_delfin" required><br>
    <label for="color_delfin">Introduce el color del delfin:</label>
    <input type="text" name="color_delfin" required><br>
    <label for="año_delfin">Introduce el año del delfin:</label>
    <input type="text" name="año_delfin" required><br>
    <label for="longitud_delfin">Introduce la longitud del delfin</label>
    <input type="number" name="año_delfin" required><br>
    <select name="accion_delfin">
        <option value="saltar">Saltar</option>
        <option value="comer">Comer</option>
    </select><br>
    <input type="submit" name="enviar_delfin" value="enviar_delfin">
</form>
<?php
    }
?>
</body>
</html>


