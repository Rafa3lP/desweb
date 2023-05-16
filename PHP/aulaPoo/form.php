<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Produtos</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1em;
        }

        .campo {
            border-radius: 4px;
            padding: .3em;
            box-shadow: 1px 1px 2px #000;
            font-size: 2rem;
        }

        #btnCalcular {
            font-size: 2rem;
            padding: .3em 1em;
            border-radius: .3em;
            cursor: pointer;
            background-color: green;
            color: white;
            outline: none;
            border: none;
        }

        #btnCalcular:hover {
            background-color: darkgreen;
        }

        input[type="number"] {
            width: 2em;
            text-align: center;
        }
    </style>
</head>

<body>
    <dix align="center">
        <h2>Formulário de Produto</h2>
        <p>
        <form action="processaOO.php" method="post">
            <div class="form-group">
                <label>Nome do produto: <input type="text" name="nome" size="20" class="campo" /></label>
            </div>
            <div class="form-group">
                <label>Marca do produto: <input type="text" name="marca" size="20" class="campo" /></label>
            </div>
            <div class="form-group">
                <label>Preço do produto: <input type="text" name="preco" size="10" class="campo" /></label>
            </div>
            <div class="form-group">
                <label>Quantidade do produto: <input type="number" value="1" name="quantidade" size="10" class="campo" /></label>
            </div>
            <input type="submit" value="Calcular" id="btnCalcular">
        </form>
        </p>
    </dix>
</body>

</html>