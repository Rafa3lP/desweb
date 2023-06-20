<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Produto.inc.php';
require_once "../utils/utils.inc.php";
?>

<center>
    <h2>
        <font face="Arial">Carrinho de Compra</font>
    </h2>
    <p>
        <?php
        session_start();
        if (isset($_SESSION["carrinho"])) {
            ?>
        <table border="0" cellspacing="2" width="60%">
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
                    <font face="Verdana" size="2" color="#FFFFFF">Valor</font>
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
            foreach ($carrinho as $idx => $produto) {
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
                            <?= $produto->getId() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $produto->getNome() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= $produto->getCodFabricante() ?>
                        </font>
                    </td>
                    <td>
                        <font face="Verdana" size="2">
                            <?= formatarMoeda($produto->getPreco()) ?>
                        </font>
                    </td>
                    <td bgcolor="#FFFFFF">
                        <font face="Verdana" size="2"><a href="#"><img src="imagens/rem3.jpg"></a></font>
                    </td>
                </tr>
                <?php

                // calcular a soma aqui
                $total += $produto->getPreco();
            }
            ?>
            <tr align="right">
                <td colspan="5">
                    <font face="Verdana" size="4" color="red"><b>Valor Total =
                            <?= formatarMoeda($total) ?>
                        </b>
                    </font>
                </td>
            </tr>
        </table>
        <p>
            <hr width="50%">
            <img src="imagens/espaco.png" border="0">
        <p>
            <a href="../controlers/controlerProduto.php?opcao=6"><img src="imagens/botao_continuar_comprando.png"
                    border="0"></a>
            <img src="imagens/espaco.png" border="0">
            <a href="#"><img src="imagens/finalizarCompra.png" border="0"></a>
            <?php
        } else {
            ?>
        <p>
            <font face="Arial">Não há produtos no carrinho de compras</font>
        </p>
        <?php
        }
        ?>
</center>
<?php
require_once 'includes/rodape.inc';
?>