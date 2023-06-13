<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Cliente.inc.php';
require_once '../utils/utils.inc.php';
?>
<div class="corpo" align="center" style="line-height: 3em;">
    <h2>Exibir Clientes</h2>
    <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');

    session_start();


    if (isset($_SESSION['clientes'])) {
        $clientes = $_SESSION['clientes'];
    ?>
        <div class="row">
            <table class="table col-10 m-auto">
                <tr>
                    <th>CPF</th>
                    <th>NOME</th>
                    <th>LOGRADOURO</th>
                    <th>CIDADE</th>
                    <th>ESTADO</th>
                    <th>CEP</th>
                    <th>TELEFONE</th>
                    <th>NASCIMENTO</th>
                    <th>EMAIL</th>
                    <th>RG</th>
                    <th>OPERAÇÃO</th>
                </tr>
                <?php
                foreach ($clientes as &$cliente) {
                ?>
                    <tr>
                        <td><?= $cliente->getCpf() ?></td>
                        <td><?= $cliente->getNome() ?></td>
                        <td><?= $cliente->getLogradouro() ?></td>
                        <td><?= $cliente->getCidade() ?></td>
                        <td><?= $cliente->getEstado() ?></td>
                        <td><?= $cliente->getCep() ?></td>
                        <td><?= $cliente->getTelefone() ?></td>
                        <td><?= formatarData($cliente->getDataNascimento()) ?></td>
                        <td><?= $cliente->getEmail() ?></td>
                        <td><?= $cliente->getRg() ?></td>
                        <td>
                            <a href="../controlers/controlerCliente.php?opcao=4&cpf=<?= $cliente->getCpf() ?>" class="btn m-1 bg-blue">Alterar</a>
                            <a href="../controlers/controlerCliente.php?opcao=3&cpf=<?= $cliente->getCpf() ?>" class="btn m-1">Excluir</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    <?php
    } else {
        echo "<p>Erro ao consultar clientes</p>";
    }
    ?>
</div>
<?php
require_once 'includes/rodape.inc';
?>