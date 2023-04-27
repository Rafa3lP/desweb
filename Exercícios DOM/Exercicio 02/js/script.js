function questao1() {
  const el = document.getElementById("paragrafo");
  const result = document.getElementById("result");
  result.innerHTML = el.textContent;
}
function questao2() {
  const tagsSpan = document.getElementsByTagName("span");
  const result = document.getElementById("result");
  result.innerHTML = "Conteúdo dentro das tags span:";
  for (const span of tagsSpan) {
    console.log(span);
    result.innerHTML += `<br/>${span.innerHTML}`;
  }
}
function questao3() {
  const itens = Array.from(document.querySelectorAll("ul li")).filter(
    (v) => v.textContent === "666"
  );
  if (itens && itens.length) {
    console.log(itens[0].textContent);
  }
}
function questao4() {
  const tagsP = document.getElementsByTagName("p");
  const tagsStrong = document.getElementsByTagName("strong");
  const liIdItem = document.querySelector("li#item");

  console.log("Tags <p>:");
  for (const p of tagsP) {
    exibirInnerHTML(p);
  }
  console.log("Tags <strong>:");
  for (const s of tagsStrong) {
    exibirInnerHTML(s);
  }
  console.log("li com id = 'item':");
  exibirInnerHTML(liIdItem);
}
function exibirInnerHTML(elemento) {
  console.log(elemento.innerHTML);
}
