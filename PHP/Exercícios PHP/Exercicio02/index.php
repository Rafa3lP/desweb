<?php

$codigo = "1324";
$quantidade = 2;

$preco = 0;
switch ($codigo) {
    case "0987":
    case "1001":
        $preco = 5.32;
        break;
    case "7623":
    case "1324":
        $preco = 6.45;
        break;
    case "6548":
        $preco = 2.37;
        break;
}

$total = $preco * $quantidade;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>

<body>
    <p>Código: <?=$codigo?></p>
    <p>Quantidade: <?=$quantidade?></p>
    <p>Valor total: <?=$total?></p>
</body>

</html>