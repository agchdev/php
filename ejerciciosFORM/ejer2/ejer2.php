<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_POST["mun1"];
        $n2 = $_POST["mun2"];
        echo "La suma es: ".($n1+$n2)."<br>";
        echo "La resta es: ".($n1-$n2)."<br>";
        echo "La multiplicación es: ".($n1*$n2)."<br>";
        if($n2 == 0){
            echo "No se puede dividir entre 0";
        }else{
            echo "La division es: ".($n1/$n2)."<br>";
        }   
        
    ?>
</body>
</html>