<?php
$nomeEmpresaA = "php Solutions";
$faturamentoA = 50000;
$despesasA = 32000;
$funcionariosA = 12;


$nomeEmpresaB = "Info Digital";
$faturamentoB = 65000;
$despesasB = 40000;
$funcionariosB = 15;


$lucroA = $faturamentoA - $despesasA;
$lucroB = $faturamentoB - $despesasB;


$mediaA = $faturamentoA / $funcionariosA;
$mediaB = $faturamentoB / $funcionariosB;


if ($lucroA > $lucroB) {
    $resultado = $nomeEmpresaA . " tem maior lucro que " . $nomeEmpresaB;
} else {
    $resultado = $nomeEmpresaB . " tem maior lucro que " . $nomeEmpresaA;
}

echo "Relatorio das empresas <br><br>";

echo "Empresa A: " . $nomeEmpresaA . "<br>";
echo "Lucro: " . $lucroA . "<br>";
echo "Media por funcionario: " . $mediaA . "<br><br>";

echo "Empresa B: " . $nomeEmpresaB . "<br>";
echo "Lucro: " . $lucroB . "<br>";
echo "Media por funcionario: " . $mediaB . "<br><br>";

echo "Resultado: <br>";
echo $resultado;

?>