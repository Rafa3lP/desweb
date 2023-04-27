var p = null;
function listar() {
    const lista = document.getElementsByTagName("ul")[0];
    const itens = lista.getElementsByTagName("li");

    const botao = document.getElementsByTagName("button")[0];

    if(!p) {
        p = document.createElement("p");
    } else {
        p.remove();
    }
    p.innerHTML = `A lista tem ${itens.length} itens. <br />`;
    Array.from(itens).forEach(item => {
        p.innerHTML += `${item.textContent}<br />`;
    });
    botao.insertAdjacentElement("afterend", p);
}