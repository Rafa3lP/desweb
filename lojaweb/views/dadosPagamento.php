<?php
require_once 'includes/cabecalho.inc';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Opção de Pagamento</h2>
    <p>Escolha a sua opção de pagamento</p>
    <form action="../controlers/controlerVenda.php" method="get">
        <div>
            <input type="radio" name="metodoPagamento" id="pagamentoBoleto" value="boleto"><label for="pagamentoBoleto"> Boleto
                bancário</label>
        </div>
        <div>
            <input type="radio" name="metodoPagamento" id="pagamentoCartao" value="cartao"><label for="pagamentoCartao"> Cartão de
                crédito</label>
        </div>
        <input type="hidden" name="opcao" value="1">
        <input type="submit" value="Efetuar Pagamento" class="btn">
    </form>
</div>
<?php
require_once 'includes/rodape.inc';
?>