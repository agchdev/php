<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'system-ui';
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(30, 30, 30);
            height: 100vh;
        }
        section{
            background-color: rgb(45, 45, 45);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 3rem;
            box-shadow: 0 0 150px rgba(255, 255, 255, 0.648);
            border-radius: 3rem;
            color: white;
            text-transform: uppercase;
            font-weight: bolder;
        }
        form > label{
            margin-bottom: 1rem;
        }
        .tableje2{
            text-align: center;
            border-collapse: collapse;
        }
        .tableje2 td{
            border: 2px solid black;
            color: black;
            padding: .5rem 1rem;
        }
        .tableje2 td:nth-child(2n){
            border: 2px solid black;
            color: black;
            padding: .5rem 1rem;
        }
        .menor{
            color: red;
            text-shadow: 0px 0px 10px red;
        }
        .mayor{
            color: green;
            text-shadow: 0px 0px 10px green;
        }
        hr{
            margin: 1rem 0;
            width: 100%;
            opacity: 25%;
        }
    </style>
</head>
<body>
    <section>
        <?php
            $media = 0;
            $nums = [$_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"], $_POST["num6"], $_POST["num7"], $_POST["num8"], $_POST["num9"], $_POST["num10"]];

            echo "<p> Array de NÚMEROS</p><p>";
            foreach($nums as $el){
                echo $el.", ";
                $media+=$el;
            }
            echo "</p>";

            sort($nums);

            echo "<hr><p>El Menor es <span class=\"mayor\">".$nums[0]."</span></p>";
            echo "<hr><p>El Mayor es <span class=\"mayor\">".$nums[9]."</span></p>";
            echo "<hr><p>La Media es <span class=\"mayor\">".($media/10)."</span></p>";
            echo "<hr><p>La Suma es <span class=\"mayor\">".$media."</span></p>";
        ?>
    </section>
</body>
</html> 