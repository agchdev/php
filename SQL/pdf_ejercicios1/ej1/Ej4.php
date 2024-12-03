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
        // 4. Crear un documento PHP que por medio de formularios permita al usuario
        // introducir nuevos productos.

    
        if(isset($_POST["enviar"])){
            $db=new mysqli('localhost','root','','tienda');
            $db->set_charset("utf8");


            $pro=new Producto($db, $_POST["descripcion"], $_POST["precio"]);
            $pro->crearProducto();
        }else{
    ?>
        <form action="Ej4.php" method="post" enctype="multipart/form-data">
            <input type="text" name="descripcion" placeholder="Describe el producto...">
            <br>
            <input type="number" step="0.01" name="precio" placeholder="Precio del prodcuto...">
            <br>
            <input type="submit" name="enviar" value="enviar">
        </form>
    <?php
        }
    ?>
</body>
</html>