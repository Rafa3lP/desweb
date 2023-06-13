<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Cliente.inc.php';
require_once '../utils/utils.inc.php';

session_start();

$cliente = $_SESSION['cliente'];

?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Alterar Cliente</h2>
    <form action="../controlers/controlerCliente.php" method="post" class="form">
        <input type="hidden" name="cpf" id="cpf" value="<?= $cliente->getCpf() ?>" readonly>
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" maxlength="50" value="<?= $cliente->getNome() ?>">
        </div>
        <div class="form-group">
            <label for="logradouro">Logradouro: </label>
            <input type="text" name="logradouro" id="logradouro" maxlength="100" value="<?= $cliente->getLogradouro() ?>">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade: </label>
            <input type="text" name="cidade" id="cidade" maxlength="30" value="<?= $cliente->getCidade() ?>">
        </div>
        <div class="form-group">
            <label for="estado">Estado: </label>
            <input type="text" name="estado" id="estado" maxlength="2" value="<?= $cliente->getEstado() ?>">
        </div>
        <div class="form-group">
            <label for="cep">CEP: </label>
            <input type="text" name="cep" id="cep" maxlength="9" value="<?= $cliente->getCep() ?>">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" id="telefone" maxlength="12" value="<?= $cliente->getTelefone() ?>">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data Nascimento: </label>
            <input type="text" name="data_nascimento" id="data_nascimento" value="<?= formatarData($cliente->getDataNascimento()) ?>">
        </div>
        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" maxlength="20" value="<?= $cliente->getEmail() ?>">
        </div>
        <div class="form-group">
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" maxlength="12" value="<?= $cliente->getSenha() ?>">
        </div>
        <div class="form-group">
            <label for="rg">RG: </label>
            <input type="text" name="rg" id="rg" maxlength="13" value="<?= $cliente->getRg() ?>">
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