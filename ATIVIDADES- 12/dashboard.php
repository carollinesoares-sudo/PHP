<?php
session_start();

if (!isset($_SESSION['nome'])) {

    header("Location: index.php");

    exit();
}

$tema = $_COOKIE['tema'] ?? 'claro';

$nome = $_SESSION['nome'];

$empresa = $_SESSION['empresa'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Painel</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="<?= $tema ?>">

    <div class="container">

        <h1>Olá, <?= $nome ?> </h1>
        <p>Empresa favorita: <?= $empresa ?></p>

        <p> Tema atual: <?= $tema ?> </p>

        <a href="logout.php">
            Sair</a>

    </div>

</body>

</html>