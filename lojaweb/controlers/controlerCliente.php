<?php
require_once("../dao/ClienteDAO.inc.php");
require_once("../classes/Cliente.inc.php");

$opcao = (int) $_REQUEST["opcao"];

if($opcao == 1){ // INSERIR
    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"];
    $logradouro = $_REQUEST["logradouro"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    $cep = $_REQUEST["cep"];
    $telefone = $_REQUEST["telefone"];
    $data_nascimento = $_REQUEST["data_nascimento"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    $rg = $_REQUEST["rg"];

    $cliente = new Cliente();
    $cliente->setCliente($cpf, $nome, $logradouro, $cidade, $estado, $cep, $telefone, $data_nascimento, $email, $senha, $rg);

    $clienteDAO = new ClienteDAO();
    $clienteDAO->incluirCliente($cliente);

    header("Location: controlerCliente.php?opcao=2");
} elseif ($opcao == 2){ // OBTER
    $clienteDAO = new ClienteDAO();

    $clientes = $clienteDAO->getClientes();

    session_start();

    $_SESSION["clientes"] = $clientes;

    header("Location: ../views/exibirClientes.php");
} elseif ($opcao == 3){ // EXCLUIR
    $cpf = $_REQUEST["cpf"];

    $clienteDAO = new clienteDAO();
    $clienteDAO->excluirCliente($cpf);

    header("Location: controlerCliente.php?opcao=2");
} elseif ($opcao == 4){ // BUSCAR PARA ALTERAÇÃO
    $cpf = $_REQUEST["cpf"];

    $clienteDAO = new clienteDAO();
    $cliente = $clienteDAO->getCliente($cpf);

    session_start();

    $_SESSION["cliente"] = $cliente;

    header("Location: ../views/formAlterarCliente.php");
} elseif ($opcao == 5){ // ALTERAR
    $cpf = $_REQUEST["cpf"];
    $nome = $_REQUEST["nome"];
    $logradouro = $_REQUEST["logradouro"];
    $cidade = $_REQUEST["cidade"];
    $estado = $_REQUEST["estado"];
    $cep = $_REQUEST["cep"];
    $telefone = $_REQUEST["telefone"];
    $data_nascimento = $_REQUEST["data_nascimento"];
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    $rg = $_REQUEST["rg"];

    $cliente = new Cliente();
    $cliente->setCliente($cpf, $nome, $logradouro, $cidade, $estado, $cep, $telefone, $data_nascimento, $email, $senha, $rg);

    $clienteDAO = new clienteDAO();
    $clienteDAO->alterarCliente($cliente);

    header("Location: controlerCliente.php?opcao=2");
} elseif ($opcao == 6){ // LOGIN
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];

    $clienteDAO = new clienteDAO();
    $cliente = $clienteDAO->autenticar($email, $senha);

    if($cliente != null){
        session_start();
        $_SESSION["cliente"] = $cliente;
        header("Location: ../views/dadosCompra.php");
    } else {
        header("Location: ../views/formLoginCliente.php?erro=1");
    }
}

?>