<?php
include_once("../Livro.inc.php");

require_once '../db_connect.inc.php';

$op = (int)$_REQUEST["op"];

switch ($op) {
    case 1:
        buscar();
        break;
    case 2:
        deletar();
        break;
    default:
        echo "Opção não reconhecida";
        break;
}

function buscar()
{
    global $conn;

    $isbn = $_REQUEST["isbn"];

    session_start();

    $_SESSION["livro"] = null;

    $rs = $conn->prepare("SELECT * FROM livros WHERE isbn = ? LIMIT 1");
    $rs->bindParam(1, $isbn);
    if ($rs->execute()) {
        if ($rs->rowCount() > 0) {
            $row = $rs->fetch(PDO::FETCH_OBJ);

            $livro = new Livro($row->titulo, $row->descricao, $row->isbn, $row->edicao_num, $row->ano_publicacao);

            $_SESSION["livro"] = serialize($livro);
        }
    }
    header('location: ./resultado.php');
}

function deletar() {
    global $conn;

    session_start();

    if(isset($_SESSION["livro"])){
        $livro = unserialize($_SESSION["livro"]);

        $rs = $conn->prepare("DELETE FROM livros WHERE isbn = ?");
        $rs->bindParam(1, $livro->isbn);
        if($rs->execute()){
            echo "Livro deletado com sucesso!";
        } else {
            echo "Falha ao deletar livro!";
        }
    }

}

