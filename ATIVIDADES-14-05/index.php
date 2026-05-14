<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>

    <style>
       body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, sans-serif;
    background: linear-gradient(135deg, #e8f5e9, #f2f2f2);
}

.container {
    background: #ffffff;
    padding: 35px 30px;
    border-radius: 16px;
    text-align: center;
    width: 360px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.container:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 40px rgba(121, 18, 18, 0.15);
}

h2 {
    color: #be479b;
    margin-bottom: 25px;
    font-size: 22px;
    letter-spacing: 0.5px;
}

button {
    background: linear-gradient(135deg, #d14295, #d45cac);
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 10px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: all 0.2s ease;
    box-shadow: 0 6px 15px rgba(146, 40, 146, 0.25);
}

button:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(179, 30, 92, 0.35);
}

button:active {
    transform: scale(0.98);
}

.resultado {
    margin-top: 25px;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px;
}

.numero {
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #c059b7, #812866);
    color: white;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    font-size: 16px;
    font-weight: bold;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    animation: pop 0.25s ease;
}

@keyframes pop {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}</style>
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