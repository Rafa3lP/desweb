<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Fabricante.inc.php';

session_start();

$fabricantes = $_SESSION['fabricantes'];
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Cadastrar Produto</h2>
    <form action="../controlers/controlerProduto.php" method="post" class="form">
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"><?=$produto->getDescricao()?></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço: </label>
            <input type="text" name="preco" id="preco">
        </div>
        <div class="form-group">
            <label for="estoque">Estoque: </label>
            <input type="text" name="estoque" id="estoque">
        </div>
        <div class="form-group">
            <label for="referencia">Referência: </label>
            <input type="text" name="referencia" id="referencia">
        </div>
        <div class="form-group">
            <label for="dataFabricacao">Data Fabricação: </label>
            <input type="text" name="dataFabricacao" id="dataFabricacao">
        </div>
        <div class="form-group">
            <label for="fabricante">Fabricante: </label>
            <select name="fabricante" id="fabricante">
                <option value="0">Selecione...</option>
                <?php
                foreach ($fabricantes as $fabricante) {
                    ?>
                    <option value="<?= $fabricante->getCodigo() ?>"><?= $fabricante->getNome() ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <input type="hidden" name="opcao" value="1">

        <div class="right">
            <input type="reset" value="Cancelar" class="btn"> <input type="submit" value="Cadastrar" class="btn">
        </div>
    </form>
</div>
<?php
require_once 'includes/rodape.inc';
?>