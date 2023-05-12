<?php 
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

session_start();
$nome = $_SESSION["nome"];
$login = $_SESSION["login"];

$data = new DateTime();

$dataFormatada = strftime("%d de %B de %Y", $data->getTimestamp());
$horaFormatada = $data->format("H:i");
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
    <h1>
        Bem-vindo <?= $nome ?>
    </h1>
    <p>Hoje são <?= $dataFormatada ?></p>
    <p>Seu acesso no sistema foi feito às <?= $horaFormatada ?></p>
</body>
</html>