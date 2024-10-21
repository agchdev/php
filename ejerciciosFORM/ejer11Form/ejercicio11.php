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
    </style>
</head>
<body>
    <section>
        <?php
            
            $ip = $_POST["ip"];
            $ipArray = explode(".", $ip);
            $valida = true;
            if (count($ipArray) == 4) {
                foreach($ipArray as $el){
                    if(intval($el) >= 0 && intval($el) <= 255){
                        
                    }else{
                        $valida = false;
                    }
                }
            }else{
                $valida = false;
            }
            
            if($valida){
                echo "<p class=\"mayor\">LA IP ".$ip." VÁLIDA</p>";
            }else{
                echo "<p class=\"menor\">LA IP ".$ip." NO VÁLIDA</p>";
            }

            if(preg_match("'^[(?:[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])\.]{3}\.(?:[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])$'", $ip)){
                $valida = true;
            }else{
                $valida = false;
            }
            
            if($valida){
                echo "<p class=\"mayor\">LA IP ".$ip." VÁLIDA</p>";
            }else{
                echo "<p class=\"menor\">LA IP ".$ip." NO VÁLIDA</p>";
            }
        ?>
    </section>
</body>
</html> 