<?php
require_once '../db_connect.inc.php';

$titulo = $_REQUEST["titulo"];
$descricao = $_REQUEST["descricao"];
$isbn = $_REQUEST["isbn"];
$edicao = (int)$_REQUEST["edicao"];
$ano = (int)$_REQUEST["ano"];

$query = $conn->prepare("UPDATE livros SET titulo = ?, descricao = ?, edicao_num = ?, ano_publicacao = ? WHERE isbn = ?");
$query->bindParam(1, $titulo);
$query->bindParam(2, $descricao);
$query->bindParam(3, $edicao, PDO::PARAM_INT);
$query->bindParam(4, $ano, PDO::PARAM_INT);
$query->bindParam(5, $isbn);
$query->execute();

echo "Atualizado com sucesso!";
?>