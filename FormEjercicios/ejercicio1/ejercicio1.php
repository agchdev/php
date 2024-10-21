<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <?php
        $img1 = explode("/", $_FILES["arch1"]["type"]);
        $img2 = explode("/", $_FILES["arch2"]["type"]);

        $ruta = "./imgs/";

        if(!file_exists($ruta)){
            mkdir($ruta);
        }
        
        if($img1[0] == "image" && $img2[0] == "image"){
            $origen1 = $_FILES["arch1"]["tmp_name"];
            $nomOrig1 = $_FILES["arch1"]["name"];
            $destino1 = $ruta.$nomOrig1;
            
            $origen2 = $_FILES["arch2"]["tmp_name"];
            $nomOrig2 = $_FILES["arch2"]["name"];
            $destino2 = $ruta.$nomOrig2;

            move_uploaded_file($origen1, $destino1);
            move_uploaded_file($origen2, $destino2);

        
            $tMB1 = $_FILES["arch1"]["size"]/(2**20);
            $tMB2 = $_FILES["arch2"]["size"]/(2**20);

            if($tMB1 > $tMB2){
                echo "
                <div>
                    <h2>IMAGEN GRANDE</h2>
                    <img src=\"$destino1\" width=\"400px\">
                </div>
                <div>
                    <h2>IMAGEN PEQUEÑA</h2>
                    <img src=\"$destino2\" width=\"400px\">
                </div>
                ";
            }else{
                echo "
                <div>
                    <h2>IMAGEN GRANDE</h2>
                    <img src=\"$destino2\" width=\"400px\">
                </div>
                <div>
                    <h2>IMAGEN PEQUEÑA</h2>
                    <img src=\"$destino1\" width=\"400px\">
                </div>
                ";
            }

            
        }else{
            header("Location: ejercicio1.html");
        }

    ?>
</body>
</html>