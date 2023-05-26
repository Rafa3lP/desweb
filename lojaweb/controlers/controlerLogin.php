<?php
require_once("../dao/conexao.inc.php");

function efetuarLogin($login, $senha) {
    $con = new Conexao();
    $conexao = $con->getConexao();

    $sql = $conexao->prepare("select * from usuarios where login = :usr and senha = :pass");

    $login = strtolower($login);
    $senha = strtolower($senha);

    $sql->bindValue(':usr', $login);
    $sql->bindValue(':pass', $senha);
    $sql->execute();

    $count = $sql->rowCount();

    return $count == 1;

}

$login = $_REQUEST["login"];
$senha = $_REQUEST["senha"];
$tipo = $_REQUEST["tipo"];

if($tipo == '1'){
    $logado = efetuarLogin($login, $senha);
    if($logado) {
        session_start();

        $_SESSION['logado'] = true;
        $_SESSION['tipousuario'] = '1';
        header("Location: ../views/index.php");
    } else {
        header("Location: ../views/formLogin.php?erro=1");
    }
}

efetuarLogin($login, $senha);


?>