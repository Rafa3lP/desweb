<?php 
    // Capturar os valores recebidos
    $nome = $_REQUEST["nome"] ?? 'teste';

    $nota1 = 0;
    if(isset($_REQUEST["nota1"])) {
        $nota1 = $_REQUEST["nota1"];
    }

    $nota2 = $_REQUEST["nota2"] ?? 0;
    $nota3 = $_REQUEST["nota3"] ?? 0;

    // Faz o calculo da média
    $media = ($nota1 + $nota2 + $nota3)/3;

    // envia os dados para a página de resultado
    setcookie("nome", $nome);
    setcookie("media", $media);

    // encaminhar para outra página php
    header("location:exibirResultadoCookie.php");
?>