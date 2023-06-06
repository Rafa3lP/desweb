<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Fabricante.inc.php';
require_once '../classes/Produto.inc.php';
require_once '../utils/utils.inc.php';

session_start();

$fabricantes = $_SESSION['fabricantes'];
$produto = $_SESSION['produto'];

?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Alterar Produto</h2>
    <form action="../controlers/controlerProduto.php" method="post" class="form">
        <input type="hidden" name="id" id="id" value="<?= $produto->getId() ?>" readonly>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?= $produto->getNome() ?>">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"><?= $produto->getDescricao() ?></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço: </label>
            <input type="text" name="preco" id="preco" value="<?= $produto->getPreco()?>">
        </div>
        <div class="form-group">
            <label for="estoque">Estoque: </label>
            <input type="text" name="estoque" id="estoque" value="<?= $produto->getEstoque() ?>">
        </div>
        <div class="form-group">
            <label for="referencia">Referência: </label>
            <input type="text" name="referencia" id="referencia" value="<?= $produto->getReferencia() ?>">
        </div>
        <div class="form-group">
            <label for="dataFabricacao">Data Fabricação: </label>
            <input type="text" name="dataFabricacao" id="dataFabricacao"
                value="<?= formatarData($produto->getDataFabricacao()) ?>">
        </div>
        <div class="form-group">
            <label for="estoque">Estoque: </label>
            <input type="text" name="estoque" id="estoque" value="<?= $produto->getEstoque() ?>">
        </div>

        <div class="form-group">
            <label for="fabricante">Fabricante: </label>
            <select name="fabricante" id="fabricante">
                <option value="0">Selecione...</option>
                <?php
                foreach ($fabricantes as $fabricante) {
                    ?>
                    <option value="<?= $fabricante->getCodigo() ?>"
                        <?= $fabricante->getCodigo() == $produto->getCodFabricante() ? "selected" : "" ?>><?= $fabricante->getNome() ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <input type="hidden" name="opcao" value="5">

        <div class="right">
            <input type="reset" value="Cancelar" class="btn"> <input type="submit" value="Alterar" class="btn">
        </div>
    </form>
</div>
<?php
require_once 'includes/rodape.inc';
?>