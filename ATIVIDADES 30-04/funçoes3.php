<?php

function calcularTempoEmpresa($anoFundacao, 
$anoAtual) {
    $tempo = $anoAtual - $anoFundacao;
    echo "Tempo empresa: $tempo anos";

}

calcularTempoEmpresa(2020,2027);
?>

