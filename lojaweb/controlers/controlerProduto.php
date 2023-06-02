<?php
require_once("../dao/ProdutoDAO.inc.php");
require_once("../classes/Produto.inc.php");

$opcao = (int) $_REQUEST["opcao"];

if($opcao == 1){ // INSERIR
    $nome = $_REQUEST["nome"];
    $dataFabricacao = $_REQUEST["dataFabricacao"];
    $preco = $_REQUEST["preco"];
    $estoque = $_REQUEST["estoque"];
    $descricao = $_REQUEST["descricao"];
    $referencia = $_REQUEST["referencia"];
    $fabricante = $_REQUEST["fabricante"];

    $produto = new Produto();
    $produto->setProduto($nome, $descricao, $dataFabricacao, $preco, $estoque, $referencia, $fabricante);

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->incluirProduto($produto);

    header("Location: ../views/exibirProdutos.php");
} elseif ($opcao == 2){ // OBTER
    $produtoDAO = new ProdutoDAO();

    $produtos = $produtoDAO->getProdutos();

    session_start();

    $_SESSION["produtos"] = $produtos;

    header("Location: ../views/exibirProdutos.php");
} elseif ($opcao == 3){ // EXCLUIR
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->excluirProduto($id);

    header("Location: controlerProduto.php?opcao=2");
}

?>