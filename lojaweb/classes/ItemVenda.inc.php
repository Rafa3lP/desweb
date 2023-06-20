<?php
require_once 'Produto.inc.php';

class ItemVenda {
    private Produto $produto;
    private int $quantidade;
    private float $valorItem;

    function __construct($produto) {
        $this->produto = $produto;
        $this->valorItem = $produto->getPreco();
        $this->quantidade = 1;
    }

    // GETTERS
    public function getValorItem() {
        return $this->valorItem;
    }
    public function getQuantidade() {
        return $this->quantidade;
    }
    public function getProduto() {
        return $this->produto;
    }

    // SETTERS
    public function setQuantidade() {
        $this->quantidade++;
    }

    public function setValorItem() {
        $this->valorItem = $this->quantidade * $this->produto->getPreco();
    }
}

?>