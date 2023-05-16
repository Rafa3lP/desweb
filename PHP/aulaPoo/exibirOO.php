<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Comprado</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <?php session_start() ?>
    <div align="center">
        <h2>
            Produto Desejado: <?= $_SESSION["nome"] ?>
        </h2>
        <h2>
            Marca: <?= $_SESSION["marca"] ?>
        </h2>
        <h2>
            Valor total: R$<?= number_format((float)$_SESSION["total"], 2, ",", ".")  ?>
        </h2>

    </div>
</body>

</html>