<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <style>
        body {
            background-color: #e068da;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        main {
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            width: 400px;
            text-align: center;
            box-shadow: 0px 10px 20px rgba(0,0,0,0.3);
        }

        .input-area {
            background-color: #b94592;
            padding: 20px;
            border-radius: 10px;
            margin-top: 10px;
        }

        h1 { font-size: 1.8rem; color: #110e0e; }
        
        label {
            display: block;
            background-color: #e96fa8;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-weight: bold;
            width: fit-content;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1.2rem;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="range"] {
            width: 100%;
            margin: 15px 0;
        }

        button {
            background-color: #e06ecd;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .resultado {
            background-color: white;
            margin-top: 20px;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
        }

        .resultado h2 { color: #350d31; margin-top: 0; }
    </style>
</head>
<body>

    <?php 
        // Captura os dados
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <div class="input-area">
                <label for="preco">Preço do Produto:</label>
                <input type="number" name="preco" id="preco" step="0.01" min="0" value="<?=$preco?>" required>

                <label for="reajuste">Percentual de Reajuste <span id="display-reajuste"><?=$reajuste?></span>%</label>
                <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" 
                       value="<?=$reajuste?>" oninput="atualizarValor()">

                <button type="submit">Calcular Reajuste</button>
            </div>
        </form>
    </main>

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['preco'])): ?>
        <section class="resultado">
            <h2>Resultado do Reajuste</h2>
            <?php 
                $valor_reajuste = ($preco * $reajuste) / 100;
                $novo_preco = $preco + $valor_reajuste;
            ?>
            <p>O produto que custava <strong>R$ <?=number_format($preco, 2, ",", ".")?></strong> 
               com um reajuste de <strong><?=$reajuste?>%</strong> passará a custar 
               <strong>R$ <?=number_format($novo_preco, 2, ",", ".")?></strong>.
            </p>
        </section>
    <?php endif; ?>

    <script>
        // Função simples para atualizar o texto do percentual enquanto move o slider
        function atualizarValor() {
            document.getElementById('display-reajuste').innerText = document.getElementById('reajuste').value;
        }
    </script>

</body>
</html>