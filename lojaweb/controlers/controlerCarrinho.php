<?php
require_once("../dao/ProdutoDAO.inc.php");
require_once("../classes/ItemVenda.inc.php");

$opcao = $_REQUEST["opcao"];

if($opcao == 1){// Inserir no carrinho
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();

    $produto = $produtoDAO->getProduto($id);

    session_start();

    $carrinho = [];

    if(isset($_SESSION["carrinho"]))
        $carrinho = $_SESSION["carrinho"];

    $item = getItemCarrinho($carrinho, $produto);
    
    if(!$item) {
        $item = new ItemVenda($produto);
        $carrinho[] = $item;
    } else {
        $item->setQuantidade();
        $item->setValorItem();
    }
    
    $_SESSION["carrinho"] = $carrinho;

    header("Location: ../views/exibirCarrinho.php");
} elseif($opcao == 2) {
    $index = (int)$_REQUEST["index"];

    session_start();
    $carrinho = $_SESSION["carrinho"];

    unset($carrinho[$index]);
    sort($carrinho);

    $_SESSION["carrinho"] = $carrinho;

    header("Location: ../views/exibirCarrinho.php");
}
function getItemCarrinho(array $carrinho, Produto $produto){
    foreach($carrinho as $item) {
        if($item->getProduto()->getId() == $produto->getId())
            return $item;
    }
    return null;
}
?>
