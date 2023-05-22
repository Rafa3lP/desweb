<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
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
    <h1>Conversão pés para metros</h1>
    <table>

        <tr>
            <th>Pés</th>
            <th>Metros</th>
        </tr>
        <?php
        $ftInicio = 3;
        $ftFim = 30;
        $ftInc = 3;

        for ($ft = $ftInicio; $ft <= $ftFim; $ft = $ft + $ftInc) {
        ?>
            <tr>
                <td><?= $ft ?></td>
                <td><?= number_format($ft/3.25, 2, ',', '.')?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>