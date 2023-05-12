<?php
    $login = $_REQUEST["login"];
    $senha = $_REQUEST["senha"];

    if($login == "labweb" && $senha == "cesjf1234") {
        session_start();
        $_SESSION["nome"] = "Laboratório WEB - CESJF";
        $_SESSION["login"] = $login;

        header("Location:bemVindo.php");
    } else {
        header('HTTP/1.1 401 Unauthorized');
        die('Credenciais inválidas!');
    }

?>