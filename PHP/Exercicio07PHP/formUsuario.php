<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form action="processaUsuario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="login">Login:</label>
        <input type="email" name="login" id="login" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>