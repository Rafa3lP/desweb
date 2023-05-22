<?php
session_start();

require_once 'classes.inc.php';

$nome = $_REQUEST['nome'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

$usuario = new Usuario($nome, $login, $senha);

$_SESSION['usuario'] = serialize($usuario);

echo "Usuário cadastrado com sucesso!<br>";
echo '<a href="Login.php">Ir para a página de login</a>';
?>