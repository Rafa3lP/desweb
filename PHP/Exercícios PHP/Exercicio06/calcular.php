<?php
$idade = (int)$_REQUEST["idade"];

$pesoNormal = (($idade - 6) / 4.4) + (2.3 * ($idade - 6)) + 22;
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div align="center">
        <h1>Calcular peso normal da criança</h1>
        <p>Peso normal: <?= number_format($pesoNormal, 2, ',', '.')?> Kg</p>
    </div>
</body>

</html>