<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Clases.php";

        $db=new mysqli('localhost','root','','tienda');
        $db->set_charset("utf8");


        $cli=new cliente($db);

        // 1. Crear un documento PHP que muestre por pantalla la información de todos
        // los clientes de la base de datos. No se deberá mostrar la contraseña del
        // cliente.

        $cli->get_datos();

        // 2. Crear un documento PHP que muestre por pantalla todas las ventas que se
        // han realizado. Deberá mostrar de cada venta el nombre del producto y el
        // nombre del cliente.

        $ventas = new venta($db);
        $ventas->get_datos();

        
    ?>
</body>
</html>