<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            font-family: 'system-ui';
            background-color: rgb(3, 3, 12);
            color: white;
        }
        p{
            font-weight: bolder;
        }
        .error{
            font-size: 4rem;
            color: red;
        }
        .valido{
            font-size: 4rem;
            color: green;
            text-shadow: 0px 0px 20px green;
        }
    </style>
</head>
<body>
    <?php
        $nom = $_POST["nomC"];
        $dni = $_POST["dni"];
        $tlf = $_POST["tlf"];

        $pdf = explode("/", $_FILES["pdf"]["type"]); // Para facilitar el tema de sacar el formato para asegurarme que es PDF

        $ruta = "./curriculums/";

        if(!file_exists($ruta)){
            mkdir($ruta);
        }

        $tMB = $_FILES["pdf"]["size"]/(2**20);

        if($pdf[1] == "pdf" && $tMB <= 2){
            $origen = $_FILES["pdf"]["tmp_name"];
            $nom = $_FILES["pdf"]["name"];
            $destino = $ruta.$nom;
            $nom = $dni;
            move_uploaded_file($origen, $destino);

            echo "<p> Nombre: ".$nom."</p>";
            echo "<p class=\"valido\"> PDF VÁLIDO </p>";
        }else{
            echo "<p class=\"error\"> PDF NO VÁLIDO </p>";
        }
    ?>
</body>
</html>