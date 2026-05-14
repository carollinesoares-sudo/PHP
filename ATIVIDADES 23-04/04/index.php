<?php


$nomeEmpresa = "Inova Digital"; 
$anoFundacao = 2015; 
$faturamento = 50000.50; 
$funcionarios = 12; 
$ativa = true; 

echo "Dados da Empresa <br><br>";

echo "Nome: " . $nomeEmpresa . "<br>";
echo "Ano de fundacao: " . $anoFundacao . "<br>";
echo "Faturamento: " . $faturamento . "<br>";
echo "Funcionarios: " . $funcionarios . "<br>";


if ($ativa) {
    echo "Status: Empresa ativa <br>";
} else {
    echo "Status: Empresa inativa <br>";
}

?>