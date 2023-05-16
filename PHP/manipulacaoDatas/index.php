<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Datas em PHP</title>
</head>
<body>
    <div style="text-align: center;">
        <h2>Teste de datas em PHP</h2>
        <p>
            <?php 
                setlocale(LC_ALL, NULL);
                setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');

                echo date('d/m/Y'); 
                
                $tempo = time();

                echo "<p>Timestamp: $tempo</p>";
                echo "<p>Timestamp formatado: ".date('d/m/Y', $tempo)."</p>";

                $dataStr = '1999-12-30';

                $data = strtotime($dataStr);

                echo "<p>Timestamp convertido: ".$data."</p>";
                echo "<p>Timestamp convertido formatado: ".date('d/m/Y', $data)."</p>";


                echo "<p>Data por extenso: ".strftime("%A, %d de %B de %Y", strtotime("today"))."</p>";

                $dt = new DateTime();

                echo "<p>Data via objeto: ".$dt->format('d/m/Y H:i')."</p>";
                
                $dt->add(new DateInterval("P20D"));
                echo "<p>Data somada: ".$dt->format('d/m/Y')."</p>";
                
                $dt->setDate(2000, 12, 25);
                echo "<p>Data nova: ".$dt->format('d/m/Y')."</p>";
                
                $dt->add(new DateInterval("P7D"));
                echo "<p>Data nova somada: ".$dt->format('d/m/Y')."</p>";
                
                $dt->setTime(7, 20);
                echo "<p>Data nova com time: ".$dt->format('d/m/Y H:i')."</p>";

            ?>
        </p>
    </div>
</body>
</html>