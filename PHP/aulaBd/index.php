<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Banco de dados com PHP</title>
</head>

<body>
    <div align="center">
        <p><a href="conexao.php?opcao=1">Incluir</a></p>
        <p><a href="conexao.php?opcao=2">Atualizar</a></p>
        <p><a href="conexao.php?opcao=3">Excluir</a></p>
        <p><a href="conexao.php?opcao=4">Selecionar</a></p>

        <form action="conexao.php">
            <input type="text" name="opcao" value="5" hidden />
            <label for="busca">Buscar autor (E-mail)</label><br>
            <input type="text" name="busca" id="busca" size="20"><br><br>
            <input type="submit" value="Buscar">
        </form>
    </div>
</body>

</html>