<?php
require_once '../db_connect.inc.php';

$titulo = $_REQUEST["titulo"];
$descricao = $_REQUEST["descricao"];
$isbn = $_REQUEST["isbn"];
$edicao = (int)$_REQUEST["edicao"];
$ano = (int)$_REQUEST["ano"];

$query = $conn->prepare("INSERT INTO livros (titulo, descricao, isbn, edicao_num, ano_publicacao) VALUES (?, ?, ?, ?, ?)");
$query->bindParam(1, $titulo);
$query->bindParam(2, $descricao);
$query->bindParam(3, $isbn);
$query->bindParam(4, $edicao, PDO::PARAM_INT);
$query->bindParam(5, $ano, PDO::PARAM_INT);
$query->execute();

echo "Cadastrado com sucesso!";
?>