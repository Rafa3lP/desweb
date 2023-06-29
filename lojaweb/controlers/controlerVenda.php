<?php
require_once '../dao/VendaDAO.php';
require_once '../classes/Venda.inc.php';
require_once '../classes/Cliente.inc.php';

$opcao = (int)$_REQUEST['opcao'];

if($opcao == 1) { // INCLUIR VENDA
    $metodoPagamento = $_REQUEST["metodoPagamento"];

    // registrar venda
    session_start();

    $cliente = $_SESSION["clienteLogado"];
    $total = $_SESSION["total"];
    $carrinho = $_SESSION["carrinho"];

    $venda = new Venda($cliente->getCpf(), $total);

    $vendaDAO = new VendaDAO();
    $vendaDAO->incluirVenda($venda, $carrinho);

    if($metodoPagamento == "boleto") {
        echo "Emitir o boleto bancário";
    } else if ($metodoPagamento == "cartao") {
        echo "dados cartao";
    }

    unset($_SESSION["carrinho"], $_SESSION["total"]);
}

?>