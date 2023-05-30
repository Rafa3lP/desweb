<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Produto.inc.php';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Exibir Produtos</h2>
    <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    session_start();


    if (isset($_SESSION['produtos'])) {
        $produtos = $_SESSION['produtos'];
        ?>
        <div class="row">
            <table class="table col-9 m-auto">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>PREÇO</th>
                    <th>ESTOQUE</th>
                    <th>REFERÊNCIA</th>
                    <th>DATA DE FABRICAÇÃO</th>
                    <th>FABRICANTE</th>
                </tr>
                <?php
                foreach ($produtos as &$produto) {
                    ?>
                    <tr>
                        <td>
                            <?= $produto->getId() ?>
                        </td>
                        <td>
                            <?= $produto->getNome() ?>
                        </td>
                        <td>
                            <?= $produto->getDescricao() ?>
                        </td>
                        <td>
                            <?= "R$".number_format((float)$produto->getPreco(), 2, ',', '.') ?>
                        </td>
                        <td>
                            <?= $produto->getestoque() ?>
                        </td>
                        <td>
                            <?= $produto->getReferencia() ?>
                        </td>
                        <td>
                            <?= date("d/m/Y", $produto->getDataFabricacao()) ?>
                        </td>
                        <td>
                            <?= $produto->getCodFabricante() ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <?php
    } else {
        echo "<p>Erro ao consultar produtos</p>";
    }
    ?>
</div>
<?php
require_once 'includes/rodape.inc';
?>