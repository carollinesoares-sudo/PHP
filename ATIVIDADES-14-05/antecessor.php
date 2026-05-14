<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>

    <style>

        body{
            background-color: #2e2020;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container{
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            text-align: center;
            width: 300px;
        }

        h1{
            color: #333;
            margin-bottom: 20px;
        }

        input{
            width: 90%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #a87676;
            border-radius: 5px;
        }

        button{
            background-color: #705252;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover{
            background-color: #0056b3;
        }

        .resultado{
            margin-top: 20px;
            color: #444;
            font-size: 18px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>Antecessor e Posterior</h1>

    <form method="post">

        <input type="number" name="numero" required>

        <button type="submit">Calcular</button>

    </form>

    <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $numero = $_POST["numero"];

        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<div class='resultado'>";
        echo "<h3>Resultado</h3>";
        echo "Número digitado: $numero <br>";
        echo "Antecessor: $antecessor <br>";
        echo "Sucessor: $sucessor <br>";
        echo "</div>";
    }

    ?>

</div>

</body>
</html>