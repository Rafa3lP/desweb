$(() => {
  $.getJSON("js/estoque.json", function (estoque) {
    $("#nomeLoja").text(estoque.nomeLoja);
    $("#cnpj").text(`CNPJ: ${estoque.cnpj}`);
    $("#codFornecedor").text(`Código: ${estoque.fornecedor.codFornecedor}`);
    $("#nomeFornecedor").text(`Nome: ${estoque.fornecedor.nome}`);
    $("#cidadeFornecedor").text(`Cidade: ${estoque.fornecedor.cidade}`);

    estoque.produtos.forEach((produto) => {
      $("#tProdutos tbody").append(`
                <tr>
                    <td>${produto.id}</td>
                    <td>${produto.nome}</td>
                    <td>${currency(produto.precoUnitario)}</td>
                    <td>${produto.qtdEmEstoque}</td>
                    <td>${currency(
                      produto.qtdEmEstoque * produto.precoUnitario
                    )}</td>
                </tr>
            `);
    });

  });
});

function currency(val) {
  return val.toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL",
  });
}
