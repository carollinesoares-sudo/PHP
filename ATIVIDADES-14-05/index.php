<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>

    <style>
        body{
            background-color: #cfc4c4;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container{
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            width: 350px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.5);
        }

        h2{
            color: #00a651;
            margin-bottom: 20px;
        }

        button{
            background-color: #00a651;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        button:hover{
            background-color: #008f45;
            transform: scale(1.05);
        }

        .resultado{
            margin-top: 25px;
        }

        .numero{
            display: inline-block;
            background-color: #00a651;
            color: white;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            margin: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
<div class="container">

    <h2>Sorteador de Números</h2>

    <form method="post">
        <button type="submit">Sortear Números</button>
    </form>

    <?php
    $numeros = [];

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        while(count($numeros) < 6){
            $numero = mt_rand(1, 60);

            if(!in_array($numero, $numeros)){
                $numeros[] = $numero;
            }
        }

        sort($numeros);

        echo "<div class='resultado'>";

        foreach($numeros as $num){
            echo "<span class='numero'>" . sprintf("%02d", $num) . "</span>";
        }

        echo "</div>";
    }
    ?>

</div>
</body>
</html>