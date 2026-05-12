<?php
session_start();

$tema = $_COOKIE['tema'] ?? 'claro';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Mini Sistema</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $tema; ?>">

    <div class="container">

        <h1>Mini Sistema</h1>

        <form action="salvar.php" method="POST">

            <p>Nome:</p>

            <input type="text" name="nome" required>

            <p>Empresa favorita:</p>

            <input type="text" name="empresa" required>

            <p>Tema:</p>

            <select name="tema">

                <option value="claro">Claro</option>

                <option value="escuro">Escuro</option>

            </select>

            <button type="submit">
                Entrar
            </button>

        </form>

    </div>

</body>

</html>