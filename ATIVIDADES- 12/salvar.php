<?php
session_start();

$_SESSION['nome'] = $_POST['nome'];

$_SESSION['empresa'] = $_POST['empresa'];

setcookie(
    "tema",
    $_POST['tema'],
    time() + 3600
);

header("Location: dashboard.php");

exit();
?>