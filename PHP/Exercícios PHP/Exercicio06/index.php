<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        input {
            padding: .5em;
            font-size: 1em;
        }

        #idade {
            width: 3em;
        }

    </style>
</head>

<body>
    <div align="center">
        <h1>Calcular peso normal da criança</h1>
        <form action="calcular.php" method="post">
            <label for="idade">Idade: </label>
            <input type="number" max="15" name="idade" id="idade">
            <input type="submit" value="Calcular">
        </form>
    </div>
</body>

</html>