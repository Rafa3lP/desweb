<?php
require_once 'includes/cabecalho.inc';
require_once '../classes/Cliente.inc.php';
?>
<div class="corpo" align="center" style="line-height: 3em;">
     <h1>Dados da compra</h1>
     <p>
          <?php
          session_start();

          $cliente = $_SESSION["cliente"];
          $total = $_SESSION["total"];
          $carrinho = $_SESSION["carrinho"];

          echo var_dump($cliente);
          echo "<br><br><br>";
          echo var_dump($total);
          echo "<br><br><br>";
          echo var_dump($carrinho);
          echo "<br><br><br>";
          ?>
     </p>
</div>
<?php
require_once 'includes/rodape.inc';
?>