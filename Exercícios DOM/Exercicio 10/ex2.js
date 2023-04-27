var p1 = null;
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

function inserir() {
  const lista = document.getElementsByTagName("ul")[0];
  const input = document.getElementById("novoitem");
  const valor = input.value.trim();
  const mensagemErro = document.getElementById("msgErro");
  const indice = document.getElementById("indice").value.trim();

  if (!valor) {
    mensagemErro.innerHTML = "Por favor, digite um valor antes de inserir.";
    return;
  }

  const novoItem = document.createElement("li");
  novoItem.appendChild(document.createTextNode(valor));

  if (indice === "") {
    lista.appendChild(novoItem);
  } else if (
    isNaN(parseInt(indice)) ||
    parseInt(indice) >= lista.children.length
  ) {
    var confirmacao = confirm(
      "A posição digitada não existe. Deseja inserir ao final?"
    );
    if (confirmacao) {
      lista.appendChild(novoItem);
    }
  } else {
    lista.insertBefore(novoItem, lista.children[indice]);
  }

  mensagemErro.innerHTML = "";
  input.value = "";
  input.focus();
}

function setCorFundo(event, color) {
  const el = event.target;
  el.style.backgroundColor = color;
}
