<?php
require_once("../dao/ProdutoDAO.inc.php");
require_once("../classes/Produto.inc.php");

$opcao = $_REQUEST["opcao"];

if($opcao == 1){// Inserir no carrinho
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();

    $produto = $produtoDAO->getProduto($id);

    session_start();

    $carrinho = [];

    if(isset($_SESSION["carrinho"]))
        $carrinho = $_SESSION["carrinho"];

    if(!isProdutoInCarrinho($carrinho, $produto))
        $carrinho[] = $produto;
    
    $_SESSION["carrinho"] = $carrinho;

    header("Location: ../views/exibirCarrinho.php");
}
function isProdutoInCarrinho($carrinho, $produto){
    foreach($carrinho as $item) {
        if($item->getId() == $produto->getId())
            return true;
    }
    return false;
}
?>
