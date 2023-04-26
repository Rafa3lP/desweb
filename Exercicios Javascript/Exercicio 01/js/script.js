function lerNumeros() {
  primeiroNumeroEl = document.getElementById("primeiroNumero");
  segundoNumeroEl = document.getElementById("segundoNumero");

  if (isNaN(primeiroNumeroEl.value) || isNaN(segundoNumeroEl.value)) {
    alert("Digite um número!");
    primeiroNumeroEl.value = "";
    segundoNumeroEl.value = "";
    return;
  }

  const num1 = parseFloat(primeiroNumeroEl.value);
  const num2 = parseFloat(segundoNumeroEl.value);

  document.getElementById("tabela").innerHTML = `
        <tr>
            <th>Operação</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>${num1} + ${num2}</td>
            <td>${num1 + num2}</td>
        </tr>
        <tr>
            <td>${num1} * ${num2}</td>
            <td>${num1 * num2}</td>
        </tr>
        <tr>
            <td>${num1} / ${num2}</td>
            <td>${ normalize(num1 / num2) }</td>
        </tr>
        <tr>
            <td>${num1} % ${num2}</td>
            <td>${ normalize(num1 % num2) }</td>
        </tr>
    `;
}

function normalize(num) {
    // tratar divisão por 0 e outros casos
    if(isNaN(num)) return 'Indefinido';
    // usar no máximo 2 casas decimais na exibição
    return parseFloat((num).toFixed(2));
}
