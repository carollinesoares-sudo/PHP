<?php
function calcularSalario($salario, $bonus) {// Função para calcular o salário final
    return $salario + $bonus;// Retorna a soma do salário e do bônus
}

function exibir($nome, $salarioFinal) {// Função para exibir o nome e o salário final
    echo "Nome: $nome <br>";// Exibe o nome
    echo "Salário: R$ $salarioFinal <br><br>";// Exibe o salário final
}


$valor = calcularSalario(2000, 200);// Calcula o salário final para Carol
exibir("Carol", $valor);// Exibe o nome e o salário final de Carol

$valor = calcularSalario(1500, 100);// Calcula o salário final para Evelyn
exibir("Evelyn", $valor);

?>