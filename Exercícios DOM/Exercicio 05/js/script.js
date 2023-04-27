function calcularMedia(event) {
  event.preventDefault();
  const nota1 = parseFloat(document.formAluno.nota1.value);
  const nota2 = parseFloat(document.formAluno.nota2.value);
  const nota3 = parseFloat(document.formAluno.nota3.value);

  const media = (nota1 + nota2 + nota3) / 3;

  let msg = "REPROVADO PELO RODRIGO";
  let color = "yellow";

  if (media >= 5 && media < 7) {
    msg = "RECUPERAÇÃO";
  } else if (media >= 7) {
    msg = "APROVADO";
    color = "green";
  }

  const result = document.getElementById("result");
  result.style.color = color;
  result.textContent = msg;
}
