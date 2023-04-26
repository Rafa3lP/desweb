function reajusteSalario() {
  const inputSalarioAtual = prompt(
    "Digite o salário atual do colaborador em R$"
  );

  if (!inputSalarioAtual || isNaN(inputSalarioAtual)) {
    alert("digite um salário válido");
    location.reload();
    return;
  }

  const salarioAtual = parseFloat(inputSalarioAtual);

  let percentualAplicado = 20;

  if (salarioAtual >= 280 && salarioAtual < 700) {
    percentualAplicado = 15;
  } else if (salarioAtual >= 700 && salarioAtual < 1500) {
    percentualAplicado = 10;
  } else if (salarioAtual >= 1500) {
    percentualAplicado = 5;
  }

  const valorAumento = (percentualAplicado / 100) * salarioAtual;

  document.getElementById("resultado").innerHTML = `
  <div>Salário antes do reajuste: ${salarioAtual.toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL",
  })}</div>
  <div>Percentual de aumento aplicado: ${percentualAplicado}%</div>
  <div>Valor do aumento: ${valorAumento.toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL",
  })}</div>
  <div>Novo salário: ${(salarioAtual + valorAumento).toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL",
  })} </div>
  `;
}
