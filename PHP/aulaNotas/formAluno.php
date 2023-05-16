<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de entrada</title>
</head>

<body>
    <h2>Cálculo de média final</h2>
    <p>
    <form action="processaNotaCookie.php" method="post">
        Nome: <input size="30" type="text" name="nome" /><br>
        Nota 1: <input size="10" type="text" name="nota1" /><br>
        Nota 2: <input size="10" type="text" name="nota2" /><br>
        Nota 3: <input size="10" type="text" name="nota3" /><br><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Cancelar">
    </form>
    </p>
</body>

</html>