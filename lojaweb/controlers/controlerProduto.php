<?php
require_once("../dao/ProdutoDAO.inc.php");
require_once("../classes/Produto.inc.php");

$opcao = (int) $_REQUEST["opcao"];

if ($opcao == 1) { // INSERIR
    $nome = $_REQUEST["nome"];
    $dataFabricacao = $_REQUEST["dataFabricacao"];
    $preco = $_REQUEST["preco"];
    $estoque = $_REQUEST["estoque"];
    $descricao = $_REQUEST["descricao"];
    $referencia = $_REQUEST["referencia"];
    $fabricante = $_REQUEST["fabricante"];

    $produto = new Produto();
    $produto->setProduto($nome, $descricao, $dataFabricacao, $preco, $estoque, $referencia, $fabricante);

    $produtoDAO = new ProdutoDAO();
    $produtoDAO->incluirProduto($produto);

    uploadFotos($referencia);

    header("Location: controlerProduto.php?opcao=2");
} elseif ($opcao == 2 || $opcao == 6) { // OBTER
    $produtoDAO = new ProdutoDAO();

    $produtos = $produtoDAO->getProdutos();

    session_start();

    $_SESSION["produtos"] = $produtos;

    if ($opcao == 2) {
        header("Location: ../views/exibirProdutos.php");
    } else {
        header("Location: ../views/produtosVenda.php");
    }
} elseif ($opcao == 3) { // EXCLUIR
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();

    deletarFoto($produtoDAO->getProduto($id)->getReferencia());

    $produtoDAO->excluirProduto($id);

    header("Location: controlerProduto.php?opcao=2");
} elseif ($opcao == 4) { // BUSCAR PARA ALTERAÇÃO
    $id = $_REQUEST["id"];

    $produtoDAO = new ProdutoDAO();
    $produto = $produtoDAO->getProduto($id);

    session_start();

    $_SESSION["produto"] = $produto;

    header("Location: controlerFabricante.php?opcao=3");
} elseif ($opcao == 5) { // ALTERAR
    $id = $_REQUEST["id"];
    $nome = $_REQUEST["nome"];
    $dataFabricacao = $_REQUEST["dataFabricacao"];
    $preco = $_REQUEST["preco"];
    $estoque = $_REQUEST["estoque"];
    $descricao = $_REQUEST["descricao"];
    $referencia = $_REQUEST["referencia"];
    $fabricante = $_REQUEST["fabricante"];

    $produto = new Produto();
    $produto->setProduto($nome, $descricao, $dataFabricacao, $preco, $estoque, $referencia, $fabricante);
    $produto->setId($id);

    $produtoDAO = new ProdutoDAO();

    $produtoOld = $produtoDAO->getProduto($id);

    if(isset($_FILES["imagem"]) && $_FILES["imagem"] != NULL){
        deletarFoto($produtoOld->getReferencia());
        uploadFotos($referencia);
    } else {
        if($produtoOld->getReferencia() != $referencia){
            renomearFoto($produtoOld->getReferencia(), $referencia);
        }
    }

    $produtoDAO->alterarProduto($produto);

    header("Location: controlerProduto.php?opcao=2");
} elseif($opcao == 7) { // Obter produtos com paginação
    $pagina = (int) $_REQUEST["pagina"];
    $produtoDAO = new ProdutoDAO();

    $produtos = $produtoDAO->getProdutosPaginacao($pagina);
    $numPaginas = $produtoDAO->getPagina();

    session_start();
    $_SESSION["produtos"] = $produtos;

    header("Location: ../views/exibirProdutosPaginacao.php?paginas=$numPaginas");
} elseif($opcao == 8) { // Incluir vários produtos
    $produtoDAO = new ProdutoDAO();

    $produtoDAO->incluirVariosProdutos();
    
    header("Location: controlerProduto.php?opcao=2");
}

function uploadFotos($ref){
    $imagem = $_FILES["imagem"];
    $nome = $ref;
    
    if($imagem != NULL) {
        $nome_temporario=$_FILES["imagem"]["tmp_name"];
        copy($nome_temporario,"../views/imagens/produtos/$nome.jpg");
    }
    else {
        echo "Você não realizou o upload de forma satisfatória.";
    }    
}

function deletarFoto($ref){
    $arquivo = "../views/imagens/produtos/$ref.jpg";

    if(file_exists( $arquivo )){
        if (!unlink($arquivo)){
            echo "Não foi possível deletar o arquivo!";
        }
    }
}

function renomearFoto($ref, $refNova){
    $arquivo = "../views/imagens/produtos/$ref.jpg";
    $arquivoNovo = "../views/imagens/produtos/$refNova.jpg";

    if(file_exists( $arquivo )){
        if (!rename($arquivo, $arquivoNovo)){
            echo "Não foi possível renomear o arquivo!";
        }
    }
}

?>