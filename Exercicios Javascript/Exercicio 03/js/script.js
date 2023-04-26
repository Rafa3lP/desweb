function requestDate() {
  const inputDate = prompt("Digite uma data no formato DD/MM/YYYY");
  const dateRegex = new RegExp(/^(\d{1,2})\/(\d{1,2})\/(\d{4})$/);
  const monthNames = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro",
  ];

  if (!dateRegex.test(inputDate)) {
    alert("Formato de data inválido!");
    return;
  }

  const dateArr = inputDate.split("/");

  if (isNaN(Date.parse([...dateArr].reverse().join("-")))) {
    alert("Data inválida!");
    return;
  }

  document.getElementById("data").innerHTML = `${dateArr[0]} de ${
    monthNames[parseInt(dateArr[1]) - 1]
  } de ${dateArr[2]}`;
}
