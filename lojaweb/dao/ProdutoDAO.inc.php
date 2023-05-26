<?php
require_once("conexao.inc.php");
require_once("../classes/Produto.inc.php");
require_once("../utils/utils.inc.php");

class ProdutoDAO
{
    private $conn;
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    public function incluirProduto(Produto $produto)
    {
        $sql = $this->conn->prepare("INSERT INTO produtos (nome, descricao, data_fabricacao, preco, estoque, referencia, cod_fabricante) 
        VALUES (:nome, :descricao, :data_fabricacao, :preco, :estoque, :referencia, :cod_fabricante)");

        $sql->bindValue(':nome', $produto->getNome());
        $sql->bindValue(':descricao', $produto->getDescricao());
        $sql->bindValue(':data_fabricacao', converteData($produto->getDataFabricacao()));
        $sql->bindValue(':preco', $produto->getPreco());
        $sql->bindValue(':estoque', $produto->getEstoque());
        $sql->bindValue(':referencia', $produto->getReferencia());
        $sql->bindValue(':cod_fabricante', $produto->getCodFabricante());
        $sql->execute();
    }
}
?>