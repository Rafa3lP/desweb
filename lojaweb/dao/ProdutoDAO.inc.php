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
        $sql->bindValue(':data_fabricacao', converteDataMySQL($produto->getDataFabricacao()));
        $sql->bindValue(':preco', $produto->getPreco());
        $sql->bindValue(':estoque', $produto->getEstoque());
        $sql->bindValue(':referencia', $produto->getReferencia());
        $sql->bindValue(':cod_fabricante', $produto->getCodFabricante());
        $sql->execute();
    }

    public function getProdutos()
    {
        $rs = $this->conn->query("SELECT * FROM produtos");

        $lista = array();
        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            $produto = new Produto();

            $produto->setId($row->produto_id);
            $produto->setCodFabricante($row->cod_fabricante);
            $produto->setDescricao($row->descricao);
            $produto->setNome($row->nome);
            $produto->setDataFabricacao($row->data_fabricacao);
            $produto->setEstoque($row->estoque);
            $produto->setPreco($row->preco);
            $produto->setReferencia($row->referencia);

            $lista[] = $produto;
        }

        return $lista;
    }

    public function getProduto($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM produtos WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);
        
        $produto = new Produto();

        $produto->setId($row->produto_id);
        $produto->setCodFabricante($row->cod_fabricante);
        $produto->setDescricao($row->descricao);
        $produto->setNome($row->nome);
        $produto->setDataFabricacao($row->data_fabricacao);
        $produto->setEstoque($row->estoque);
        $produto->setPreco($row->preco);
        $produto->setReferencia($row->referencia);

        return $produto;
    }

    public function excluirProduto($id){
        $sql = $this->conn->prepare("DELETE FROM produtos WHERE produto_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}
?>