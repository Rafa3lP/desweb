<?php
require_once 'includes/cabecalho.inc';
require_once "../utils/utils.inc.php";
require_once "../classes/ItemVenda.inc.php"
    ?>

<center>
    <?php
    if (isset($_REQUEST["erro"]) && $_REQUEST["erro"] == 1) {
        ?>
        <font face="Verdana" size="3" color="red">
            Cupom inválido!
        </font>
        <?php
    }
    ?>

    <h2>
        <font face="Arial">Carrinho de Compra</font>
    </h2>
    <?php
    session_start();
    if (isset($_SESSION["carrinho"]) && count($_SESSION["carrinho"]) > 0) { ?>
        <table border="0" cellspacing="2" width="60%" class="mt-1">
            <tr bgcolor="#000098" align="center">
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">
                        <font face="Verdana" size="2">Item No</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">Ref.</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">Nome</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">Fabricante</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">Qtd</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">ValorTitem</font>
                </th>
                <th>
                    <font face="Verdana" size="2" color="#FFFFFF">Valor Total</font>
                </th>
                <th bgcolor="#FFFFFF">
                    <font face="Verdana" size="2" color="#000000">Remover</font>
                </th>
            </tr>
            <?php
            $carrinho = $_SESSION["carrinho"];
            $total = 0;
            // Realizar o percurso no vetor de carrinho e colocar as informações em cada linha <tr>
        
            // --- FOREACH INICIA AQUI
            foreach ($carrinho as $idx => $item) {
                if ($idx % 2) {
                    $color = "#ffffff";
                } else {
                    $color = "#ccc";
                }

                ?>
                <tr align="center" bgcolor="<?= $color ?>">
                    <td>
                        <font face="Verdana" size="2">
                            <?= $idx + 1 ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $item->getProduto()->getId() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $item->getProduto()->getNome() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $item->getProduto()->getCodFabricante() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $item->getQuantidade() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= formatarMoeda($item->getProduto()->getPreco()) ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= formatarMoeda($item->getValorItem()) ?>
                        </font>
                    </td>
                    <td bgcolor="#FFFFFF">
                        <font face="Verdana" size="2"><a
                                href="../controlers/controlerCarrinho.php?opcao=2&index=<?= $idx ?>"><img
                                    src="imagens/rem3.jpg"></a></font>
                    </td>
                </tr>
                <?php

                // calcular a soma aqui
                $total += $item->getValorItem();
            }
            ?>
            <tr align="right">
                <td colspan="7">
                    <font face="Verdana" size="4" color="red"><b>Valor Total =
                            <?= formatarMoeda($total) ?>
                        </b>
                    </font>
                </td>
            </tr>
        </table>
        <form action="../controlers/controlerCarrinho.php">
            <label for="cupom">Cupom de desconto: </label>
            <input type="text" name="cupom" id="cupom">
            <input type="hidden" name="opcao" value="6">
            <input type="submit" value="Aplicar">
        </form>
            <?php
            if (isset($_REQUEST["status"]) && $_REQUEST["status"] == 2) {
                ?>
                <font face="Verdana" size="3" color="green">
                    Cupom ativado! Clique em finalizar compra para ver o novo valor
                </font>
                <?php
            }
            ?>
            <p>
                <hr width="50%">
                <img src="imagens/espaco.png" border="0">
            <p>
                <a href="../controlers/controlerProduto.php?opcao=6"><img src="imagens/botao_continuar_comprando.png"
                        border="0"></a>
                <img src="imagens/espaco.png" border="0" />
                <a href="../controlers/controlerCarrinho.php?opcao=5&total=<?= $total ?>"><img
                        src="imagens/finalizarCompra.png" border="0"></a>

            <form action="../controlers/controlerCliente.php" method="post" class="form">

                <?php
    } else {
        ?>
                <p class="m-1">
                    <font face="Arial">Não há produtos no carrinho de compras</font>
                </p>
                <p class="m-1">
                    <a href="../controlers/controlerProduto.php?opcao=6">Visualizar produtos</a>
                </p>
                <?php
    }
    ?>
</center>
<?php
require_once 'includes/rodape.inc';
?>