function mudarFundo() {
    const valor = parseInt(Math.random() * 10);
    if (valor % 3 == 0) {
        document.bgColor = "lightgreen";
    } else {
        document.bgColor = "lightgrey";
    }
}

function resetar() {
    location.reload();
}

function trocarTexto() {
    const paragrafo = document.getElementById("texto");
    paragrafo.innerHTML = "Texto modificado!";
}

function carregarImagem() {
    const imgEl = document.getElementById("imagem");
    imgEl.src = "imagens/arquitetura.png";
}

function desaparecerImagem() {
    const imgEl = document.getElementById("imagem");
    imgEl.src = "";
}

function ver() {
    const info = document.getElementById("este");
    info.style.display = "contents";
}

function esconder() {
    const info = document.getElementById("este");
    info.style.display = "none";
}

function tabelar() {
    const tabela = document.getElementById("tabela");
    tabela.border = "10";
    tabela.style.backgroundColor = "goldenrod";
    tabela.width = "70%";
}

function destacar() {
    const campo = document.querySelector("input[type='text']");
    campo.style.backgroundColor = "bisque";
}

function limpar() {
    const campo = document.querySelector("input[type='text']");
    campo.style.backgroundColor = "transparent";
}

function manipular() {
    const lista = document.getElementById("lista");
    const novoItem = document.createElement("li");
    const texto = document.createTextNode("novo Item!!");
    novoItem.appendChild(texto);
    lista.appendChild(novoItem);
}

function estiloTabela() {
    const tabela = document.getElementById("tabela");
    tabela.className = "table";
}

function removeEstiloTabela() {
    const tabela = document.getElementById("tabela");
    //tabela.className = "";
    tabela.classList.remove("table");
    tabela.classList.add("table2");
}