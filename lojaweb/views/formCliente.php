<?php
require_once 'includes/cabecalho.inc';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Cadastrar Cliente</h2>
    <form action="../controlers/controlerCliente.php" method="post" class="form">
        <div class="form-group">
            <label for="cpf">CPF: </label>
            <input type="text" name="cpf" id="cpf" maxlength="12">
        </div>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" maxlength="50">
        </div>
        <div class="form-group">
            <label for="logradouro">Logradouro: </label>
            <input type="text" name="logradouro" id="logradouro" maxlength="100">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" maxlength="30">
        </div>
        <div class="form-group">
            <label for="estado">Estado: </label>
            <input type="text" name="estado" id="estado" maxlength="2">
        </div>
        <div class="form-group">
            <label for="cep">CEP: </label>
            <input type="text" name="cep" id="cep" maxlength="9">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" id="telefone" maxlength="12">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data Nascimento: </label>
            <input type="text" name="data_nascimento" id="data_nascimento">
        </div>
        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" maxlength="20">
        </div>
        <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" maxlength="12">
        </div>
        <div class="form-group">
            <label for="rg">RG: </label>
            <input type="text" name="rg" id="rg" maxlength="13">
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