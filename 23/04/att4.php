<?php
// pagina inicial da empresa ficticia

$nomeEmpresa = "Inova Digital";
$anoFundacao = 2015;
$faturamento = 50000;

// inicio do site
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pagina Inicial</title>
</head>

<body>

<?php

echo "Bem-vindo ao site da " . $nomeEmpresa . "<br>";
?>

<?php

echo "A empresa foi fundada em " . $anoFundacao . "<br>";
?>

<?php

echo "Faturamento atual: " . $faturamento . "<br>";
?>

</body>
</html>