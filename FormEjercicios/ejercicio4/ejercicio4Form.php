<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            font-family: 'system-ui';
            background-color: rgb(3, 3, 12);
            color: white;
            overflow: hidden;
        }
        h1{
            font-size: 4rem;
            margin-bottom: 2rem;
        }
        body > div{
            display: flex;
            gap: 3rem;
        }
        body > div > form{
            display: flex;
        }
        form>div>article{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(3, 3, 12);
            box-shadow: 0px 0px 100px rgba(255, 255, 255, 0.116);
            padding: 3rem;
            border-radius: 2rem;
            justify-content: center;
        }
        form>div{
            display: flex;
            gap: 3rem;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        input{
            margin: auto;
        }
        h2{
            margin: auto;
            font-size: 2rem;
            text-transform: uppercase;
            border-bottom: 1px solid white;
            margin-bottom: 1rem;
        }
        article > div{
            display: flex;
            flex-direction: column;
            width: 100%;
            text-align: center;
        }
        label{
            margin: 1rem 0 .7rem;
            font-weight: bolder;
        }
        input{
            background-color: rgba(255, 255, 255, 0.116);
            border: 1px solid white;
            padding: 1rem 1.5rem;
            border-radius: 3rem;
            color: white;
        }
        .enviar{
            margin-top: 2rem;
            background-color: rgb(15, 0, 83);
            font-weight: bolder;
            border: 0;
            cursor: pointer;
            transition: all .5s ease;
        }
        .enviar:hover{
            box-shadow: 0 0 20px rgb(15, 0, 83);
        }
        .error{
            color: red;
            font-weight: bolder;
            text-shadow: 0 0 15px red;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1>IMAGEN NUMERO DE VECES</h1>
    <div>
        <form action="ejercicio4.php" method="POST" enctype="multipart/form-data">
            <div>
                <article>
                    <h2>EJERCICIO 4</h2>
                    <?php
                        if(isset($_GET["err"])){
                            if($_GET["err"] == 1) echo "<p class=\"error\">Inserta una imagen</p>";
                            if($_GET["err"] == 2) echo "<p class=\"error\">Pesa demasiado</p>";
                            if($_GET["err"] == 3) echo "<p class=\"error\">Introduce un numero</p>";
                        }
                    ?>
                    <div>
                        <label for="num">INTRODUCE UN NUMERO:</label>
                        <input type="text" name="num" placeholder="introduce un numero">
                    </div>
                    <div>
                        <label for="img">INTRODUCE UNA IMAGEN:</label>
                        <input type="file" name="img" placeholder="Introduce una imagen">
                    </div>
                </article>
            </div>
            <input class="enviar" type="submit" value="Enviar archivo">
        </form>
    </div>
    
    
</body>
</html>