<HTML>
<HEAD>
 <TITLE>Loja Virtual Desweb</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</HEAD>
<BODY>
<div class="topo">
<img src="imagens/capa12.png">
</div>

<div class="barra">
<nav>
<ul class="menu">
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Quem somos?</a></li>
  <li><a href="#">Clientes</a>
          <ul>
                  <li><a href="./formCliente.php">Cadastrar</a></li>
                  <li><a href="../controlers/controlerCliente.php?opcao=2">Consultar Todos</a></li>
          </ul>
    </li>
    <li><a href="#">Produtos</a>
            <ul>
                  <li><a href="../controlers/controlerFabricante.php?opcao=2">Cadastrar</a></li>
                  <li><a href="../controlers/controlerProduto.php?opcao=8">Cadastrar Vários</a>
                  <li><a href="../controlers/controlerProduto.php?opcao=2">Consultar Todos</a>
                  <li><a href="../controlers/controlerProduto.php?opcao=7&pagina=1">Consultar Paginação</a>
            </ul>
      </li>
      <li><a href="#">Vendas</a>
              <ul>
                      <li><a href="../controlers/controlerProduto.php?opcao=6">Relação de produtos</a></li>
                      <li><a href="exibirCarrinho.php">Ver carrinho</a></li>
                      <li><a href="../controlers/controlerCarrinho.php?opcao=3">Esvaziar carrinho</a></li>
              </ul>
        </li>
  <li><a href="contato.php">Contato</a></li>
  <li><a href="views/formLogin.php">Login</a></li>
</ul>
</nav>
</div>
<p>&nbsp;