<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar livro</title>
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

    <form action="cadastrar.php" method="post">
        <h1>Cadastro de livros</h1>
        <div class="form-group">
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao">
        </div>
        <div class="form-group">
            <label for="isbn">ISBN: </label>
            <input type="text" name="isbn" id="isbn">
        </div>
        <div class="form-group">
            <label for="edicao">Edição: </label>
            <input type="number" name="edicao" id="edicao">
        </div>
        <div class="form-group">
            <label for="ano">Ano de publicação: </label>
            <input type="text" name="ano" id="ano" pattern="^\d{4}$" maxlength="4">
        </div>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>