function calcularValor(event) {
  event.preventDefault();
  const qtdParcelas = parseInt(document.form.qtdParcelas.value);
  const valorParcela = 75 / qtdParcelas;

  document.getElementById(
    "valorParcela"
  ).innerHTML = `Valor da parcela: ${valorParcela.toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL",
  })}`;
}
