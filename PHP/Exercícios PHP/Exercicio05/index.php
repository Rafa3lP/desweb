<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
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
            <th>° Fahrenheit</th>
            <th>° Celcius</th>
        </tr>
        <?php
        $fim = 60;
        $inc = 2;

        for ($f = 0; $f <= $fim; $f = $f + $inc) {
        ?>
            <tr>
                <td><?= $f ?></td>
                <td><?= ($f - 30)/2?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>