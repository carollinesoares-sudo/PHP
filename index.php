<?php

$nomeEmpresa = "php Solutions";
$faturamento = 50000;
$despesas = 32000;
$funcionarios = 12;

// calculo simples
$lucro = $faturamento - $despesas;
$media = $faturamento / $funcionarios;

echo "Relatorio da empresa <br><br>";

echo "Empresa: " . $nomeEmpresa . "<br>";
echo "Faturamento: " . $faturamento . "<br>";
echo "Despesas: " . $despesas . "<br>";
echo "Lucro: " . $lucro . "<br>";
echo "Media por funcionario: " . $media . "<br>";

?>