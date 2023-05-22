<?php
session_start();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

require_once 'classes.inc.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$usuario = unserialize($_SESSION['usuario']);

if($usuario->efetuarLogin($login, $senha)) {
    echo "Bem-vindo, " . $usuario->getNome() . "!<br>";
    echo "Último login em: " .  $usuario->getDataLogin()->format('d/m/Y H:i:s') . "<br>";
} else {
    echo "Login ou senha incorretos!<br>";
}

?>
