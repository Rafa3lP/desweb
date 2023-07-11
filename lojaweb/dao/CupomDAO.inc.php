<?php
require_once("conexao.inc.php");
require_once("../utils/utils.inc.php");

class CupomDAO
{
    private $conn;
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    public function getCupomValido($cupom) {
        $sql = $this->conn->prepare("SELECT * FROM cupons WHERE codigo = :codigo LIMIT 1");
        $sql->bindValue(':codigo', $cupom);
        $sql->execute();

        if($sql->rowCount() == 0) return false;

        $row = $sql->fetch(PDO::FETCH_OBJ);

        $datavalidade = new DateTime($row->data_validade);
        $dataHoje = new DateTime();

        $dataHoje->setTime(0,0);

        if($dataHoje > $datavalidade) return false;

        return $row;
    }
}
?>