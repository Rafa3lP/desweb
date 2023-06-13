<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Produto.inc.php';
require_once '../classes/Fabricante.inc.php';
require_once '../utils/utils.inc.php';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Exibir Produtos</h2>
    <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    session_start();

    $fabricantes = $_SESSION['fabricantes'];

    function getNomeFabricante($cod){
        global $fabricantes;
        foreach ($fabricantes as $fabricante) {
            if ($fabricante->getCodigo() === $cod) {
                return $fabricante->getNome();
            }
        }
        return null;
    }

    if (isset($_SESSION['produtos'])) {
        $produtos = $_SESSION['produtos'];
        ?>
        <div class="row">
            <table class="table col-10 m-auto">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>PREÇO</th>
                    <th>ESTOQUE</th>
                    <th>REFERÊNCIA</th>
                    <th>DATA DE FABRICAÇÃO</th>
                    <th>FABRICANTE</th>
                    <th>OPERAÇÃO</th>
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
                            <?= formatarMoeda($produto->getPreco()) ?>
                        </td>
                        <td>
                            <?= $produto->getestoque() ?>
                        </td>
                        <td>
                            <?= $produto->getReferencia() ?>
                        </td>
                        <td>
                            <?= formatarData($produto->getDataFabricacao()) ?>
                        </td>
                        <td>
                            <?= getNomeFabricante($produto->getCodFabricante()) ?>
                        </td>
                        <td>
                            <a href="../controlers/controlerProduto.php?opcao=4&id=<?=$produto->getId()?>" class="btn m-1 bg-blue">Alterar</a>
                            <a href="../controlers/controlerProduto.php?opcao=3&id=<?=$produto->getId()?>" class="btn m-1">Excluir</a>
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