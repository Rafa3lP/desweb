<?php
    $servidor = "localhost";
    $nomeBd = "livraria";
    $usuario = "root";
    $senha = "";

    $con = new PDO("mysql:host=$servidor;dbname=$nomeBd", $usuario, $senha);

    $opcao = $_REQUEST["opcao"];

    if($opcao == 1) //Incluir
    {
        $con->query("INSERT INTO autores (autor_id, nome, email, dt_nasc) VALUES (50, 'Pedro 2023', 'pedro2023@gmail.com', '2023-05-18')");
        echo "Inserido com sucesso!";
    }

    if($opcao == 2) //Atualizar
    {
        $con->query("UPDATE autores SET nome = 'Pedro do futuro', email = 'pedrofuturo@gmail.com' WHERE autor_id = 50");     
        echo "Atualizado com sucesso!";
    }

    if($opcao == 3) //Excluir
    {
        $con->query("DELETE FROM autores WHERE autor_id = 50");
        echo "Excluído com sucesso!";
    }

    if($opcao == 4) //Selecionar
    {
        $rs = $con->query("SELECT * FROM autores");

        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            echo "Autor: $row->nome, Email: $row->email, Nasc: $row->dt_nasc<br><br>";
        }

        // while($row = $rs->fetch(PDO::FETCH_ASSOC)){
        //     echo $row['email'] . "<br>";
        // }

        // while($row = $rs->fetch(PDO::FETCH_NUM)){
        //     echo $row[1] . "<br>";
        // }

        echo "<br>Selecionado com sucesso!";
    }

    if($opcao == 5) {
        $busca = $_REQUEST["busca"];
        $busca = "%$busca%";

        $query = $con->prepare("SELECT * FROM autores WHERE email LIKE ?");
        $query->bindParam(1, $busca);
        $query->execute();

        if($query->rowCount() > 0) {
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo "Autor: $row->nome, Email: $row->email, Nasc: $row->dt_nasc<br><br>";
            }
        } else {
            echo "Nenhum registro encontrado";
        }
    }
?>