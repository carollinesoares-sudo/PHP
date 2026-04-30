<?php

$funcionarios = [
    ["nome" => "Ana"],
    ["nome" => "Carlos"],
    ["nome" => "Julia"]
];

$setores = ["TI", "RH", "Financeiro"];
?>

<?php
foreach ($funcionarios as $f) {
    echo $f["nome"] . "<br>";
}

echo "<br>";

foreach ($setores as $s) {
    echo $s . "<br>";
}
?>