<?php
require_once("conexao.inc.php");
require_once("../classes/Produto.inc.php");
require_once("../utils/utils.inc.php");

class ProdutoDAO
{
    private $conn;
    private $porPagina;

    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
        $this->porPagina = 10;
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

    public function alterarProduto(Produto $produto)
    {
        $sql = $this->conn->prepare(
            "UPDATE produtos 
        SET 
        nome=:nome, 
        descricao=:descricao, 
        data_fabricacao=:data_fabricacao, 
        preco=:preco, 
        estoque=:estoque, 
        referencia=:referencia, 
        cod_fabricante=:cod_fabricante 
        WHERE produto_id = :id"
        );

        $sql->bindValue(':nome', $produto->getNome());
        $sql->bindValue(':descricao', $produto->getDescricao());
        $sql->bindValue(':data_fabricacao', converteDataMySQL($produto->getDataFabricacao()));
        $sql->bindValue(':preco', $produto->getPreco());
        $sql->bindValue(':estoque', $produto->getEstoque());
        $sql->bindValue(':referencia', $produto->getReferencia());
        $sql->bindValue(':cod_fabricante', $produto->getCodFabricante());
        $sql->bindValue(':id', $produto->getId());
        $sql->execute();
    }

    public function getProdutos()
    {
        $rs = $this->conn->query("SELECT * FROM produtos");

        $lista = array();
        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            $produto = $this->rowToProduto($row);

            $lista[] = $produto;
        }

        return $lista;
    }

    public function getProduto($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM produtos WHERE produto_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);

        $produto = $this->rowToProduto($row);

        return $produto;
    }

    public function excluirProduto($id)
    {
        $sql = $this->conn->prepare("DELETE FROM produtos WHERE produto_id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function getProdutosPaginacao($pagina)
    {
        $init = ($pagina - 1) * $this->porPagina;

        $result = $this->conn->query("SELECT * FROM produtos LIMIT $init, $this->porPagina");
        $lista = array();
        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
            $produto = $this->rowToProduto($row);

            $lista[] = $produto;
        }

        return $lista;
    }

    public function getPagina()
    {
        $result = $this->conn->query("SELECT count(*) as total FROM produtos");
        $row = $result->fetch(PDO::FETCH_OBJ);

        $total = $row->total;

        $paginas = ceil($total / $this->porPagina);

        return $paginas;
    }

    public function incluirVariosProdutos()
    {
        for ($i = 1; $i <= 100; $i++) {
            $sql = $this->conn->prepare("INSERT INTO produtos (
                nome, 
                descricao, 
                data_fabricacao, 
                preco, estoque, 
                referencia, 
                cod_fabricante
            ) VALUES (
                :nome, 
                :descricao, 
                :data_fabricacao, 
                :preco, 
                :estoque, 
                :referencia, 
                :cod_fabricante
            )");

            $sql->bindValue(':nome', "Produto $i");
            $sql->bindValue(':descricao', "Descrição $i");
            $sql->bindValue(':data_fabricacao', "2023-01-01");
            $sql->bindValue(':preco', 10 + ($i * 2));
            $sql->bindValue(':estoque', $i * 10);
            $sql->bindValue(':referencia', rand(1000000000,9999999999));
            $sql->bindValue(':cod_fabricante', 4002);
            $sql->execute();
        }
    }

    private function getFabricante($id)
    {
        $sql = $this->conn->prepare("SELECT nome FROM fabricantes where codigo = :id");
    
        $sql->bindValue(':id', $id);
        $sql->execute();
    
        $fab = $sql->fetch(PDO::FETCH_OBJ);
    
        return $fab->nome;
    }
    
    private function rowToProduto($row)
    {
        $produto = new Produto();

        $produto->setId($row->produto_id);
        $produto->setCodFabricante($row->cod_fabricante);
        $produto->setFabricante($this->getFabricante($row->cod_fabricante));
        $produto->setDescricao($row->descricao);
        $produto->setNome($row->nome);
        $produto->setDataFabricacao($row->data_fabricacao);
        $produto->setEstoque($row->estoque);
        $produto->setPreco($row->preco);
        $produto->setReferencia($row->referencia);

        return $produto;
    }
}
