<?php
setcookie("empresa", "Cachorro quentes", time() + 3600);// Cria um cookie chamado "empresa" com o valor "XPTO123" que expira em 1 hora
echo "Cookie criado<br>";// Exibe uma mensagem indicando que o cookie foi criado

var_dump($_COOKIE);// Exibe o conteúdo dos cookies de forma legível

?>

*/
setcookie()	Cria/envia um cookie
$_COOKIE	Guarda cookies recebidos
var_dump($_COOKIE)	Mostra todos os cookies
*\