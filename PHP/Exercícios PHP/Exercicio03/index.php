<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Tabela de depreciação</h1>
    <table>

        <tr>
            <th>Ano</th>
            <th>Depreciação</th>
            <th>Valor no fim do ano</th>
            <th>Depreciação Acumulada</th>
        </tr>
        <?php
        $valor = 28000;
        $depreciacao = 4000;

        $anos = (int) $valor / $depreciacao;
        for ($i = 1; $i <= $anos; $i++) {
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $depreciacao ?></td>
                <td><?= $valor - ($depreciacao * $i) ?></td>
                <td><?= $depreciacao * $i ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>