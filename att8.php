<?php
function calcularSalario($salario, $bonus) {
    return $salario + $bonus;
}

function exibir($nome, $salarioFinal) {
    echo "Nome: $nome <br>";
    echo "Salário: R$ $salarioFinal <br><br>";
}


$valor = calcularSalario(2000, 200);
exibir("João", $valor);

$valor = calcularSalario(1500, 100);
exibir("Maria", $valor);

?>