<?php
require_once 'includes/cabecalho.inc';
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
            <input type="text" name="descricao" id="descricao">
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
            <label for="fabricante">Fabricante: </label>
            <input type="text" name="fabricante" id="fabricante" value="1000">
        </div>
        <div class="form-group">
            <label for="dataFabricacao">Data Fabricação: </label>
            <input type="text" name="dataFabricacao" id="dataFabricacao">
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