var p1 = null;
var p2 = null;
function listar() {
  const lista = document.getElementsByTagName("ul")[0];
  const itens = lista.getElementsByTagName("li");

  const botao = document.getElementsByTagName("button")[0];

  if (!p1) {
    p1 = document.createElement("p");
  } else {
    p1.remove();
  }
  p1.innerHTML = `A lista tem ${itens.length} itens. <br />`;
  Array.from(itens).forEach((item) => {
    p1.innerHTML += `${item.textContent}<br />`;
  });
  botao.insertAdjacentElement("afterend", p1);
}

function listar2() {
  const lista = document.getElementsByTagName("ul")[1];
  const itens = lista.getElementsByTagName("li");

  const botao = document.getElementsByTagName("button")[1];

  if (!p2) {
    p2 = document.createElement("p");
  } else {
    p2.remove();
  }
  p2.innerHTML = `A lista tem ${itens.length} itens. <br />`;
  Array.from(itens).forEach((item) => {
    p2.innerHTML += `${item.textContent}<br />`;
  });
  botao.insertAdjacentElement("afterend", p2);
}

function inserir() {
  const lista = document.getElementsByTagName("ul")[0];
  const input = document.getElementById("novoitem");
  const valor = input.value.trim();
  const mensagemErro = document.getElementById("msgErro");

  if (!valor) {
    mensagemErro.innerHTML = "Por favor, digite um valor antes de inserir.";
    return;
  }

  mensagemErro.innerHTML = "";
  const novoItem = document.createElement("li");
  novoItem.textContent = valor;
  lista.appendChild(novoItem);
  input.value = "";
  input.focus();
}
