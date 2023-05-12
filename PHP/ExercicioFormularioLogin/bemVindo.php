<?php 
session_start();
$nome = $_SESSION["nome"];
$login = $_SESSION["login"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo - <?= $nome ?></h1>
    <p>login: <?= $login ?></p>
</body>
</html>