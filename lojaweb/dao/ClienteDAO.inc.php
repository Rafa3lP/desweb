<?php
require_once("conexao.inc.php");
require_once("../classes/Cliente.inc.php");
require_once("../utils/utils.inc.php");

class ClienteDAO
{
    private $conn;
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    public function incluirCliente(Cliente $cliente)
    {
        $sql = $this->conn->prepare("INSERT INTO clientes (cpf, nome, logradouro, cidade, estado, cep, telefone, data_nascimento, email, senha, rg, perfil) 
        VALUES (:cpf, :nome, :logradouro, :cidade, :estado, :cep, :telefone, :data_nascimento, :email, :senha, :rg, :perfil)");

        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':logradouro', $cliente->getLogradouro());
        $sql->bindValue(':cidade', $cliente->getCidade());
        $sql->bindValue(':estado', $cliente->getEstado());
        $sql->bindValue(':cep', $cliente->getCep());
        $sql->bindValue(':telefone', $cliente->getTelefone());
        $sql->bindValue(':data_nascimento', converteDataMySQL($cliente->getDataNascimento()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':rg', $cliente->getRg());
        $sql->bindValue(':perfil', $cliente->getPerfil());
        $sql->execute();
    }

    public function alterarCliente(Cliente $cliente)
    {
        $sql = $this->conn->prepare("UPDATE clientes 
        SET
        nome=:nome,
        logradouro=:logradouro,
        cidade=:cidade,
        estado=:estado,
        cep=:cep,
        telefone=:telefone,
        data_nascimento=:data_nascimento,
        email=:email,
        senha=:senha,
        rg=:rg,
        perfil=:perfil 
        WHERE cpf = :cpf"
        );

        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':logradouro', $cliente->getLogradouro());
        $sql->bindValue(':cidade', $cliente->getCidade());
        $sql->bindValue(':estado', $cliente->getEstado());
        $sql->bindValue(':cep', $cliente->getCep());
        $sql->bindValue(':telefone', $cliente->getTelefone());
        $sql->bindValue(':data_nascimento', converteDataMySQL($cliente->getDataNascimento()));
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':rg', $cliente->getRg());
        $sql->bindValue(':cpf', $cliente->getCpf());
        $sql->bindValue(':perfil', $cliente->getPerfil());

        
        $sql->execute();
    }

    public function getClientes()
    {
        $rs = $this->conn->query("SELECT * FROM clientes");

        $lista = array();
        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            $cliente = $this->rowToCliente($row);

            $lista[] = $cliente;
        }

        return $lista;
    }

    public function getCliente($cpf)
    {
        $sql = $this->conn->prepare("SELECT * FROM clientes WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);

        $cliente = $this->rowToCliente($row);

        return $cliente;
    }

    public function excluirCliente($cpf)
    {
        $sql = $this->conn->prepare("DELETE FROM clientes WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }

    public function autenticar(string $email, string $senha) {
        $sql = $this->conn->prepare("SELECT * FROM clientes WHERE email = :email AND senha = :senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        $count = $sql->rowCount();

        if($count == 1) {
            $row = $sql->fetch(PDO::FETCH_OBJ);
            $cliente = $this->rowToCliente($row);
            return $cliente;
        }

        return null;
    }

    private function rowToCliente($row) {
        $cliente = new Cliente();

        $cliente->setCpf($row->cpf);
        $cliente->setNome($row->nome);
        $cliente->setLogradouro($row->logradouro);
        $cliente->setCidade($row->cidade);
        $cliente->setEstado($row->estado);
        $cliente->setCep($row->cep);
        $cliente->setTelefone($row->telefone);
        $cliente->setDataNascimento($row->data_nascimento);
        $cliente->setEmail($row->email);
        $cliente->setSenha($row->senha);
        $cliente->setRg($row->rg);
        $cliente->setPerfil($row->perfil);

        return $cliente;
    }
}
?>