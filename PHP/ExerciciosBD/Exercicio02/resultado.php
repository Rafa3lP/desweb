<?php
include_once("../Livro.inc.php");

session_start();

$livro = null;
if (isset($_SESSION["livro"])) {
    $livro = unserialize($_SESSION["livro"]);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    if (!$livro) {
    ?>
        <p>Livro não encontrado</p>
    <?php
    } else {
    ?>
        <h1>Livro Encontrado!</h1>
        <p>Titulo: <?= $livro->titulo ?></p>
        <form action="processa.php" method="get">
            <input name="op" hidden value="2">
            <input type="submit" value="Deletar livro">
        </form>
    <?php
    }
    ?>
</body>

</html>