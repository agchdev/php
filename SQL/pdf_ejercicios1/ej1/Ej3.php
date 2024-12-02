<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // 3. Crear un documento PHP que por medio de formulario permita al usuario 
        // insertar un nuevo cliente. 

        if(isset($_POST["enviar"])){

        }else{
    ?>
    <form action="Ej3.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nif" placeholder="Introduce el NIF...">
        <input type="text" name="nombre" placeholder="Introduce el nombre del usuario...">
        <input type="number" name="edad" placeholder="Introduce la edad...">
        <input type="text" name="usuario" placeholder="Introduce el usuario...">
        <input type="password" name="contrasenia" placeholder="Contraseña">
        <input type="password" name="contrasenia2" placeholder="Repite contraseña">
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>