<?php
require_once("conexao.inc.php");
require_once("../classes/Fabricante.inc.php");
require_once("../utils/utils.inc.php");

class FabricanteDAO
{
    private $conn;
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    public function incluirFabricante(Fabricante $fabricante)
    {
        
    }

    public function getFabricantes()
    {
        $rs = $this->conn->query("SELECT * FROM fabricantes");

        $lista = array();
        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            $fabricante = new Fabricante();

            $fabricante->setCodigo($row->codigo);
            $fabricante->setNome($row->nome);
            $fabricante->setLogradouro($row->logradouro);
            $fabricante->setCep($row->cep);
            $fabricante->setRamo($row->ramo);
            $fabricante->setCidade($row->cidade);
            $fabricante->setEmail($row->email);

            $lista[] = $fabricante;
        }

        return $lista;
    }

    public function excluirFabricante($codigo){
        $sql = $this->conn->prepare("DELETE FROM fabricantes WHERE codigo = :codigo");
        $sql->bindValue(':codigo', $codigo);
        $sql->execute();
    }
}
?>