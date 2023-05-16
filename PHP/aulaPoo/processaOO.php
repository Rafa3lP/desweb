<?php
include_once 'Produto.inc.php';

$nome = $_REQUEST["nome"];
$marca = $_REQUEST["marca"];
$preco = (float)$_REQUEST["preco"];
$quantidade = (int)$_REQUEST["quantidade"];

$produto = new Produto($nome, $marca, $preco, $quantidade);

session_start();

$_SESSION["nome"] = $nome;
$_SESSION["marca"] = $marca;
$_SESSION["total"] = $produto->calcularTotal();

header("Location: exibirOO.php");
?>