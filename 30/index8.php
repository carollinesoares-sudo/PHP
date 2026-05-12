<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário</title>
</head>
<body>

<?php
// Função para calcular o salário final
function calcularSalario($salario, $bonus) {
    return $salario + $bonus;
}

// Função para exibir o nome e o salário final
function exibir($nome, $salarioFinal) {
    echo "Nome: $nome <br>";
    echo "Salário: R$ $salarioFinal <br><br>";
}

// Execução
$valor = calcularSalario(2000, 200);
exibir("Carol", $valor);

$valor = calcularSalario(1500, 100);
exibir("Evelyn", $valor);
?>

</body>
</html>