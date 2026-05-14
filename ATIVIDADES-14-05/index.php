<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Reajustador</title>
    <style>
        /* Estilos que eu escolhi para o formulário */
        body {
            background-color: #e068da; /* Cor que eu gostei */
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
        }
        .caixa {
            background: white;
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0,0,0,0.2);
        }
        input { margin-bottom: 15px; width: 90%; }
        button { background: #b94592; color: white; border: none; padding: 10px; cursor: pointer; }
    </style>
</head>
<body>

    <?php 
        // Pegando os valores que vêm da URL (GET)
        $valor = $_GET['preco'] ?? 0;
        $porcent = $_GET['reajuste'] ?? 0;
    ?>

    <div class="caixa">
        <h1>Ajustar Preço</h1>
        <form action="index.php" method="get">
            <label>Preço atual (R$):</label><br>
            <input type="number" name="preco" step="0.01" value="<?=$valor?>"><br>

            <label>Aumento: <span id="num">0</span>%</label><br>
            <input type="range" name="reajuste" id="range" min="0" max="100" 
                   oninput="mudarTexto()" value="<?=$porcent?>"><br>

            <button type="submit">Calcular Agora</button>
        </form>
    </div>

    <?php if (isset($_GET['preco'])): ?>
        <div class="caixa">
            <h2>Resultado:</h2>
            <?php 
                // Fazendo a conta do aumento
                $aumento = ($valor * $porcent) / 100;
                $total = $valor + $aumento;
            ?>
            <p>O produto de R$ <?=number_format($valor, 2, ",", ".")?> 
               com <?=$porcent?>% de aumento vai para 
               <strong>R$ <?=number_format($total, 2, ",", ".")?></strong>.
            </p>
        </div>
    <?php endif; ?>

    <script>
        // Essa função faz o número mudar na tela enquanto eu arrasto o mouse
        function mudarTexto() {
            let slider = document.getElementById('range');
            let texto = document.getElementById('num');
            texto.innerText = slider.value;
        }
        // Rodar ao carregar para o número não começar em 0 se já tiver valor
        mudarTexto();
    </script>

</body>
</html>