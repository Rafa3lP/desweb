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

    header("Location: controlerProduto.php?opcao=2");
} elseif ($opcao == 2){ // OBTER
    $produtoDAO = new ProdutoDAO();

    $produtos = $produtoDAO->getProdutos();

    session_start();

    $_SESSION["produtos"] = $produtos;

    header("Location: controlerFabricante.php?opcao=4");
} elseif ($opcao == 3){ // EXCLUIR
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->excluirProduto($id);

    header("Location: controlerProduto.php?opcao=2");
} elseif ($opcao == 4){ // BUSCAR PARA ALTERAÇÃO
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();
    $produto = $produtoDAO->getProduto($id);

    session_start();

    $_SESSION["produto"] = $produto;

    header("Location: controlerFabricante.php?opcao=3");
} elseif ($opcao == 5){ // ALTERAR
    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"];
    $dataFabricacao = $_REQUEST["dataFabricacao"];
    $preco = $_REQUEST["preco"];
    $estoque = $_REQUEST["estoque"];
    $descricao = $_REQUEST["descricao"];
    $referencia = $_REQUEST["referencia"];
    $fabricante = $_REQUEST["fabricante"];

    $produto = new Produto();
    $produto->setProduto($nome, $descricao, $dataFabricacao, $preco, $estoque, $referencia, $fabricante);
    $produto->setId($id);

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->alterarProduto($produto);

    header("Location: controlerProduto.php?opcao=2");
}

?>