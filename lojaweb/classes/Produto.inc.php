<?php
class Produto
{
    private $id;
    private $nome;
    private $dataFabricacao;
    private $preco;
    private $estoque;
    private $descricao;
    private $referencia;
    private $codFabricante;

    function __construct()
    {

    }

    function setProduto($nome, $descricao, $data, $preco, $estoque, $referencia, $fabricante)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->referencia = $referencia;
        $this->codFabricante = $fabricante;
        $this->dataFabricacao = strtotime(str_replace("/", "-", $data));
    }

    //GETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getDataFabricacao()
    {
        return $this->dataFabricacao;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

    public function getCodFabricante()
    {
        return $this->codFabricante;
    }

    //SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setDataFabricacao($dataFabricacao)
    {
        $this->dataFabricacao = strtotime($dataFabricacao);
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }

    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    public function setCodFabricante($codFabricante)
    {
        $this->codFabricante = $codFabricante;
    }
}
?>