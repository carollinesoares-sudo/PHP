<?php

$nomeEmpresa = "Inova Digital"; // string
$anoFundacao = 2020; // int
$faturamento = 58000.50; // float
$funcionarios = 12; // int
$ativa = true; // boolean


$media = $faturamento / $funcionarios;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dados da Empresa</title>
</head>

<body>

<h2>Informacoes da Empresa</h2>

<?php

echo "Nome: " . $nomeEmpresa . "<br>";


echo "Ano de fundacao: " . $anoFundacao . "<br>";


echo "Faturamento: " . $faturamento . "<br>";


echo "Funcionarios: " . $funcionarios . "<br>";


echo "Media por funcionario: " . $media . "<br>";
?>

<?php

if ($ativa) {
    echo "Status: Empresa ativa <br>";
} else {
    echo "Status: Empresa inativa <br>";
}
?>

</body>
</html>