<?php

$nomeEmpresa = "php empresa";
$faturamento = 50000;

echo "Relatorio da empresa <br><br>";
echo "Nome: " . $nomeEmpresa . "<br>";
echo "Faturamento: " . $faturamento . "<br><br>";


if ($faturamento < 20000) {
    echo "Porte: Pequena empresa <br>";
}
elseif ($faturamento < 60000) {
    echo "Porte: Media empresa <br>";
}
else {
    echo "Porte: Grande empresa <br>";
}

?>