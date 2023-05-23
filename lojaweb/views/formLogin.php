<?php
require_once 'includes/cabecalho.inc';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Login do Sistema</h2>
    <form action="../controlers/controlerLogin.php" method="post">
        <p>Login: <input type="text" size="20" name="login" id="login"></p>
        <p>Senha: <input type="password" size="10" name="senha" id="senha"></p>
        <p>Tipo de Usuário:
            <select name="tipo" id="tipo">
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
            </select>
        </p>
        <p><input type="submit" value="Login"> <input type="reset" value="Cancelar"></p>
    </form>
    <p>
        <?php
        if(isset($_REQUEST["erro"])){
            if((int)$_REQUEST["erro"] == 1)
                echo "<b><font face='Verdana' size='2' color='red'>Login Incorreto</b>";
            else
                if((int)$_REQUEST["erro"] == 2)
                    echo "<b><font face='Verdana' size='2' color='red'>Por favor, efetue o login novamente</b>";
        }
        ?>
    </p>
</div>
<?php
require_once 'includes/rodape.inc';
?>