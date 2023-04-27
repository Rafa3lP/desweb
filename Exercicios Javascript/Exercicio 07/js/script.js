const usuarios = [];
function cadastrar(event) {
    event.preventDefault();
    const nome = document.formCadastro.nome.value;
    const email = document.formCadastro.email.value;

    usuarios.push({ nome, email });
}

function listar() {
    const lista = document.getElementById("lista");
    lista.innerHTML = "";
    usuarios.forEach(usuario => {
        let li = document.createElement("li");
        li.innerHTML = `Nome: ${usuario.nome} Email: ${usuario.email}`;
        lista.appendChild(li);
    });
}