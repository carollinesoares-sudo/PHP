<?php
session_start();// Inicia a sessão

$_SESSION["Usuario"] = "Carol";// Armazena o nome do usuário na sessão
echo "Usuario armazenado na sessão";// Exibe uma mensagem indicando que o usuário foi armazenado na sessão

echo "</pre>";// Exibe o conteúdo da sessão de forma legível

?>
