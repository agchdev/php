<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Clases.php";
        // 3. Crear un documento PHP que por medio de formulario permita al usuario 
        // insertar un nuevo cliente. 

        if(isset($_POST["enviar"])){
            $db=new mysqli('localhost','root','','tienda');
            $db->set_charset("utf8");


            $cli=new cliente($db, $_POST["nif"], $_POST["nombre"], $_POST["edad"], $_POST["usuario"], $_POST["contrasenia"]);
            $cli->crearUsuario();
        }else{
    ?>
    <form action="Ej3.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nif" placeholder="Introduce el NIF...">
        <br>
        <input type="text" name="nombre" placeholder="Introduce el nombre del usuario...">
        <br>
        <input type="number" name="edad" placeholder="Introduce la edad...">
        <br>
        <input type="text" name="usuario" placeholder="Introduce el usuario...">
        <br>
        <input type="password" name="contrasenia" placeholder="Contraseña">
        <br>
        <input type="password" name="contrasenia2" placeholder="Repite contraseña">
        <br>
        <input type="submit" name="enviar" value="enviar">
    </form>
    <?php
    }
    ?>
</body>
</html>