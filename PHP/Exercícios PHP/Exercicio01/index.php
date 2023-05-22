<?php
$nome = "Fulano de Tal e Silva";

$nota1 = 5;
$nota2 = 8;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

$msg = "Aprovado";

if($media <= 4) {
    $msg = "Reprovado";
} elseif($media < 7) {
    $msg = "Em prova final";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    <div align="center">
        <h1>Nome: <?=$nome?></h1>
        <h2>Média: <?= number_format($media, 2, ',', '.')?></h2>
        <h2>Resultado: <?=$msg?></h2>
    </div>
</body>
</html>