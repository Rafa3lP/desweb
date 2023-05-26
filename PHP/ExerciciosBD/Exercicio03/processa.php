<?php
include_once("../Livro.inc.php");

require_once '../db_connect.inc.php';

$isbn = $_REQUEST["isbn"];

session_start();

$livro;

$rs = $conn->prepare("SELECT * FROM livros WHERE isbn = ? LIMIT 1");
$rs->bindParam(1, $isbn);
if ($rs->execute()) {
    if ($rs->rowCount() > 0) {
        $row = $rs->fetch(PDO::FETCH_OBJ);

        $livro = new Livro($row->titulo, $row->descricao, $row->isbn, $row->edicao_num, $row->ano_publicacao);
    }
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar livro</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        .form-group {
            margin-bottom: 1em;
        }

        input[type=text],
        input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <?php
    if (isset($livro)) {
    ?>
        <form action="atualizar.php" method="post">
            <h1>Atualizar livro</h1>
            <div class="form-group">
                <label for="titulo">Título: </label>
                <input type="text" name="titulo" id="titulo" value="<?= $livro->titulo ?>">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" id="descricao" value="<?= $livro->descricao ?>">
            </div>
            <input type="hidden" name="isbn" id="isbn" value="<?= $livro->isbn ?>">
            <div class="form-group">
                <label for="edicao">Edição: </label>
                <input type="number" name="edicao" id="edicao" value="<?= $livro->edicao ?>">
            </div>
            <div class="form-group">
                <label for="ano">Ano de publicação: </label>
                <input type="text" name="ano" id="ano" pattern="^\d{4}$" maxlength="4" value="<?= $livro->ano ?>">
            </div>
            <input type="submit" value="Atualizar">
        </form>
    <?php
    } else {
        echo "Livro não encontrado";
    }
    ?>
</body>

</html>