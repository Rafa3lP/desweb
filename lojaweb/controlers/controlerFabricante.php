<?php
require_once("../dao/FabricanteDAO.inc.php");
require_once("../classes/Fabricante.inc.php");

$opcao = (int) $_REQUEST["opcao"];

if ($opcao == 1) { // INSERIR

} elseif ($opcao == 2 || $opcao == 3) { // OBTER
    $fabricanteDAO = new FabricanteDAO();

    $fabricantes = $fabricanteDAO->getFabricantes();

    session_start();

    $_SESSION["fabricantes"] = $fabricantes;

    if ($opcao == 2)
        header("Location: ../views/formProduto.php");
    elseif ($opcao == 3)
        header("Location: ../views/formAlterarProduto.php");
}

?>