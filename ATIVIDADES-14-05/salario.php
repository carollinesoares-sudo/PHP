<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Analisador de Salário</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #d34d9b; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #333;
        }

        main, section {
            background-color: #ffffff;
            width: 450px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        h1, h2 {
            color: #b1487d;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1.2rem;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }

        button {
            background-color: #b35ea7; 
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #c0456e;
        }

        section p {
            font-size: 1.1rem;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php 
        // Configuração do Salário Mínimo
        $minimo = 1621.00;

        // Captura e tratamento do dado (Garante que não aceite negativo no PHP)
        $salario = (float)($_GET['salario'] ?? 0);// Se o valor for negativo, define como 0
        if ($salario < 0) $salario = 0;
    ?>

    <main>
        <h1>Salário R$:</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">// Usando GET para facilitar a visualização do valor na URL
            <input type="number" name="salario" step="0.01" min="0" value="<?=$salario?>">// O valor mínimo é 0, e o passo é 0.01 para permitir centavos
            <p>Considerando o salário mínimo de <strong>R$ <?=number_format($minimo, 2, ",", ".")?></strong></p>
            <button type="submit">Analisar</button>// O botão agora é para submeter o formulário e analisar o salário
        </form>
    </main>

    <section>
        <h2>Análise do Salário</h2>
        <?php 
        
            $quantidade = (int)($salario / $minimo);
            $sobra = $salario - ($quantidade * $minimo); // Calcula a sobra usando o salário e a quantidade de salários mínimos
        ?>

        <p>Quem recebe um salário de <strong>R$ <?=number_format($salario, 2, ",", ".")?></strong></p>
        <p>Ganha <strong><?=$quantidade?></strong> salário(s) mínimo(s).</p>
        
        <p>E sobra: <strong>R$ <?=number_format(max(0, $sobra), 2, ",", ".")?></strong></p>
    </section>
</body>
</html>