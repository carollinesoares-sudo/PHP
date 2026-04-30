<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NOME</th>
            <th>CARGO</th>
            <th>SALARIO</th>
        </tr>
       
<?php
$funcionarios = [
    ["nome" => "Ana", "cargo" => "Analista", "salario" => 4000],
    ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 9000],
    ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 6000],

];
/*
echo "<strong>Funcionário: </strong>" . $funcionarios[2]["nome"] . 
     " <strong><br> Cargo: </strong>" . $funcionarios[2]["cargo"] . "<br>";
*/
foreach ($funcionarios as $f) {
    echo
        "<tr>
            <td>". $f["nome"]."</td>
            <td>". $f["cargo"]."</td>
            <td>" . $f["salario"]."</td>
        </tr>";
}
?>
  </table>
</body>

</html>