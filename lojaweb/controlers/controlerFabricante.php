<?php
require_once("../dao/FabricanteDAO.inc.php");
require_once("../classes/Fabricante.inc.php");

$opcao = (int) $_REQUEST["opcao"];

if($opcao == 1){ // INSERIR
    
} elseif ($opcao == 2){ // OBTER
    $fabricanteDAO = new FabricanteDAO();

    $fabricantes = $fabricanteDAO->getFabricantes();

    session_start();

    $_SESSION["fabricantes"] = $fabricantes;

    header("Location: ../views/formProduto.php");
}

?>