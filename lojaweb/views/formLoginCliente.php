<?php
require_once 'includes/cabecalho.inc';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Login do Sistema</h2>
    <p>
        <?php
        if (isset($_REQUEST["erro"])) {
            if ((int) $_REQUEST["erro"] == 1)
                echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto</b>";
            else
                if ((int) $_REQUEST["erro"] == 2)
                    echo "<b><font face='Verdana' size='2' color='red'>Por favor, efetue o login novamente</b>";
        }
        ?>
    </p>
    <form action="../controlers/controlerCliente.php" method="post">
        <div class="row justify-content-center">
            <div class="col-3 m-auto">
                <div class="row">
                    <div class="form-group p-0 col-12">
                        <label for="email">Email: </label>
                        <input type="text" name="email" id="email" maxlength="50" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group p-0 col-12">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" id="senha">
                    </div>
                </div>
                <input type="hidden" name="opcao" value="6">
                <p class="right">
                    <input type="reset" value="Cancelar" class="btn"> <input type="submit" value="Login" class="btn">
                </p>
            </div>
        </div>
    </form>
</div>
<?php
require_once 'includes/rodape.inc';
?>