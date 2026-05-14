<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"] ?? 0;
    }
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=100&$format=json&$select=cotacaoCompra';

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        // Construção da URL para acessar a API do Banco
        // Central do Brasil, onde são passados os
        // parâmetros de data inicial e data final para
        // obter a cotação do dólar no período
        // especificado. A URL é formatada para solicitar
        // os dados em formato JSON e selecionar apenas os
        // campos de cotação de compra e data/hora da
        // cotação.
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // Faz uma requisição HTTP para a URL da API
        // usando file_get_contents(), que retorna os dados
        // em formato JSON. Em seguida, os dados são
        // decodificados usando json_decode() para
        // transformar a string JSON em um array
        // associativo do PHP. O valor da cotação de compra
        // do dólar é extraído do array e armazenado na
        // variável $dolar. O resultado da conversão é
        // calculado dividindo o valor em reais pelo valor
        // da cotação do dólar.
        $dados = json_decode(file_get_contents($url), true);

        $dados = json_decode(file_get_contents($url), true);

// Exibe o resultado da conversão, formatando os
// valores em reais e dólares usando a função
// numfmt_format_currency() da extensão intl do
// PHP, que permite formatar números como moedas de
// acordo com as convenções regionais. O resultado
// inclui o valor em reais, o valor convertido em
// dólares e a cotação do dólar utilizada para a
// conversão.
$dolar = $dados['value'][0]['cotacaoCompra'];
$result = $valor / $dolar;

echo "<h2>Resultado da Conversão:</h2>";
  