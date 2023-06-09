<?php
require_once "../classes/Produto.inc.php";
require_once "../classes/Fabricante.inc.php";
require_once "../utils/utils.inc.php";
require_once 'includes/cabecalho.inc';

?>
<center>
    <h1>Produtos cadastrados</h1>
    <p>
    <div align="right">
        <a href="exibirCarrinho.php">
            <img src="imagens/meu-carrinho.png" border="0">
        </a>
    </div>
    <?php

    // habilitar a sessão
    session_start();
    // capturar a lista de produtos
    $produtos = $_SESSION["produtos"];

    // fazer o foreach colocando a tabela abaixo dentro dele
    foreach ($produtos as $produto) {
        ?>
        <div>
            <table border="0" width="30%" cellspacing="10">
                <tr>
                    <td rowspan="5" align="center"><img src="imagens/produtos/<?= $produto->getReferencia() ?>.jpg"
                            width="200" height="200" border="0"></td>
                </tr>
                <tr align="left">
                    <td colspan="2"><b>
                            <font face="Verdana" size="3">
                                <?= $produto->getNome() ?>
                            </font>
                        </b></td>
                </tr>
                <tr>
                    <td style="text-align:justify" colspan="2">
                        <font face="Verdana" size="2">
                            <?= $produto->getdescricao() ?>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <font face="Verdana" size="2"><b>Fabricante:</b>
                            <?= $produto->getFabricante() ?>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td><b>
                            <font face="Verdana" size="3" color="red">
                                <font color="black">Valor: </font>
                                <?= formatarMoeda($produto->getPreco()) ?>
                            </font>
                        </b></td>
                    <td colspan="2">
                        <?php
                        if($produto->getEstoque() <= 5) {
                            ?>
                            <font face="Verdana" size="3" color="red">
                                Produto indisponível!
                            </font>
                            <?php
                        } else {
                            ?>
                            <a href='../controlers/controlerCarrinho.php?opcao=1&id=<?= $produto->getId() ?>'>
                                <img src='imagens/botao_comprar2.png' border='0'>
                            </a>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
            </table>
            <p>
                <hr width="30%">
            <p>
        </div>
        <?php
    }
    ?>
</center>
</BODY>

</html>