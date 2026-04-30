<?php

$funcionarios = 5;

echo "Lista de funcionarios <br><br>";


for ($i = 1; $i <= $funcionarios; $i++) {

    echo "Funcionario numero: " . $i . "<br>";

    
    if ($i == 1) {
        echo " - Primeiro funcionario da lista <br>";
    }

    echo "<br>";
}

?>