<?php
session_start();// Inicia a sessão

$_SESSION["usuario"] = "Carol";// Armazena o nome do usuário na sessão

echo "Usuario armazenado na sessao <br><pre>";// Exibe o conteúdo da sessão

var_dump($_SESSION);// Exibe o conteúdo da sessão de forma legível

echo "</pre>";// Exibe o conteúdo da sessão de forma legível

?>