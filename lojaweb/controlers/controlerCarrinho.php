<?php
require_once("../dao/ProdutoDAO.inc.php");
require_once("../classes/ItemVenda.inc.php");

$opcao = $_REQUEST["opcao"];

if($opcao == 1){// INSERIR NO CARRINHO
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
} elseif($opcao == 2) { // REMOVER PRODUTO DO CARRINHO
    $index = (int)$_REQUEST["index"];

    session_start();
    $carrinho = $_SESSION["carrinho"];

    unset($carrinho[$index]);
    sort($carrinho);

    $_SESSION["carrinho"] = $carrinho;

    header("Location: ../views/exibirCarrinho.php");
} elseif($opcao == 3) { // ESVAZIAR CARRINHO
    session_start();

    unset($_SESSION["carrinho"]);

    header("Location: ../controlers/controlerProduto.php?opcao=6");
} elseif($opcao == 4) { // VALIDAR CARRINHO VAZIO
    /*
    validação pode ser feita no controller dessa forma,
    mas foi optado por fazê-la na view
    */ 
    session_start();

    if(!isset($_SESSION["carrinho"]) || sizeof($_SESSION["carrinho"]) == 0) {
        header("Location: ../views/exibirCarrinho.php?status=1");
    }   else {
        header("Location: ../views/exibirCarrinho.php");
    }
} elseif($opcao == 5) { // PROCESSO DE VENDA
    $total = (float)$_REQUEST["total"];

    session_start();

    $_SESSION["total"] = $total;

    if(isset($_SESSION["cliente"])) {
        header("Location: ../views/dadosCompra.php");
    } else {
        header("Location: ../views/formLoginCliente.php");
    }

}

function getItemCarrinho(array $carrinho, Produto $produto){
    foreach($carrinho as $item) {
        if($item->getProduto()->getId() == $produto->getId())
            return $item;
    }
    return null;
}
?>
