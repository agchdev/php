<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Ejercicio 1 y 2

        //  $num=$_POST["num"];
        // for ($i=0; $i <= 10 ; $i++) { 
        //     echo "Potencia de $num ^ $i = ".$num**$i."<br>";
        // }
        // for ($i=1; $i <=10 ; $i++) { 
        //     echo "$num x $i = ".$num*$i."<br>";
        // }

    Ejercicio 3
        $nums=$_POST["num1"];
        $aux=(int)$nums[0];
        echo "<table>";
            foreach ($nums as $value) {
                if($aux < (int)$value){
                    echo "<tr><td>$aux</td></tr>";
                }
            }
        echo"</table>";

    //Ejercicio 4
    // $nums=$_POST;
    // echo "<table>";
    //     foreach ($nums as  $value) {
    //         echo "<tr><td>Valor 1</td><td>$value</td></tr>";
    //     }
    //     echo "<tr><td>Valor 1 + valor 2</td><td>".$_POST['num1']+$_POST['num2']."</td></tr>";
    //     echo "<tr><td>Valor 2 * valor 3</td><td>".$_POST['num2']+$_POST['num3']."</td></tr>";
    //     echo "<tr><td>Valor 1 / valor 3</td><td>".$_POST['num1']/$_POST['num3']."</td></tr>";
    //     echo "<tr><td>Valor 1 + valor 2 + valor 3</td><td>".$_POST['num1']+$_POST['num2']+$_POST['num3']."</td></tr>";
    //     echo "<tr><td>(Valor 2 + valor 3)/valor1</td><td>".($_POST['num2']+$_POST['num3'])/$_POST['num1']."</td></tr>";
    // echo "</table>";

    //Ejercicio 5
    // echo "<table>";
    //     for ($i=$_POST['num1']; $i <= $_POST['num2'] ; $i++) { 
    //         echo "<tr><td>$i</td></tr>";
    //     }
    // echo "</table>";

    //Ejercicio 6
    // if($_POST['edad'] >=18) echo "El usuario ". $_POST['nombre'] ."es mayor de edad";
    // else echo "El usuario ". $_POST['nombre'] ."es menor de edad";

    //Ejercicio 7
        // $num=$_POST['num1'];
        // $cont=0;
        // for ($i=1; $i <= $num ; $i++) { 
        //     if($num%$i ==0)$cont++;
        // }
        // if($cont <=2)echo "El numero es primo";
        // else echo "no lo es";
    
    //Ejercicio 8
    // echo "<table>";
    // echo "<tr><td>Alñumno</td><td>".$_POST['Alumno']."</td></tr>";
    // foreach ($_POST as $key => $value) {
       
    //     if($value<5){
    //         echo "<tr><td>$key</td><td>Insuficiente</td></tr>";
    //     }elseif ($value <9) {
    //         echo "<tr><td>$key</td><td>Notable</td></tr>";
    //     }elseif ($value <=10) {
    //         echo "<tr><td>$key</td><td>Sobresaliente</td></tr>";
    //     }
    // }
        
    // echo "</table>";

    //Ejercicio 9
    // echo "<table>";
    //     echo "<tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>";
    //     foreach ($_POST as $key => $value) {
    //         echo "<tr><td>$value</td><td>".$value**2 ."</td><td>".$value**3 ."</td></tr>";
    //     }
    // echo "</table>";
    //Ejercicio 10
    // echo "<table style=\"background-color:".$_POST['color']."\">";
    // echo "<tr><td>tabla del ". $_POST['num']."</td><td></td></tr>";
    //     for ($i=1; $i <=10; $i++) { 
    //         echo "<tr><td>".$_POST['num']."*$i =</td><td>". $_POST['num']*$i ."</td></tr>";
    //     }
    // echo "</table>";
    ?>
</body>
</html>