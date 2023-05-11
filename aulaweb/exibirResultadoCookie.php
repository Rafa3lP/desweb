<?php
    $nome = $_COOKIE["nome"];
    $media = number_format((float)$_COOKIE["media"], 2, ',', '.');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <style>
        table {
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Resultado final para <?= $nome?></h2>
    <p>
        <table width="40%">
            <tr>
                <th>Dado</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Média</td>
                <td><?= $media?></td>
            </tr>
        </table>
    </p>
</body>
</html>