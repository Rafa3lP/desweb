function validar() {
    const nome = document.userForm.usuario.value;
    const senha = document.userForm.senha.value;
    const confirmSenha = document.userForm.confirmSenha.value;
    const email = document.userForm.email.value;
    const mes = document.userForm.mesNasc.value;
    const ano = document.userForm.anoNasc.value;
    let menorDeIdade = false;
    debugger;
    if(nome.length < 10){
        alert("O nome tem que ter pelo menos 10 caracteres!");
        return false;
    }

    if(!nome.includes(" ")){
        alert("O nome deve incluir pelo menos um espaço");
        return false;
    }

    if(senha !== confirmSenha) {
        alert("O conteúdo dos campos senha e confirmar senha devem ser iguais");
        return false;
    }

    if(!email.includes("@")) {
        alert("O email deve ter um caractere @");
        return false;
    }

    if(!email.endsWith(".com") && !email.endsWith(".br")) {
        alert("O email deve terminar com .com ou .br");
        return false;
    }

    if(isNaN(mes) || parseInt(mes) < 1 || parseInt(mes) > 12) {
        alert("O mês de nascimento não pode ser abaixo de 1 ou maior do que 12");
        return false;
    }

    if(isNaN(ano)) {
        alert("O ano deve ser um número");
        return false;
    }

    const dataAtual = new Date();
    const anoAtual = dataAtual.getFullYear();
    const mesAtual = dataAtual.getMonth() + 1;
    let idade = anoAtual - parseInt(ano);
    if(parseInt(mes) > mesAtual) {
        idade--;
    }
   
    menorDeIdade = idade < 18;
   
    if(!menorDeIdade) {
        alert("Você não é menor de idade");
        return false;
    }

    return true;
}

function getResult() {
    const result = document.getElementById("result");
    const data = new Date();
    const hora = data.getHours();
    const minutos = data.getMinutes();
    const dia = data.getDate();
    const mes = data.getMonth() + 1;
    const ano = data.getFullYear();
    result.innerHTML = `Registro efetuado em ${hora}:${minutos} na data de ${dia}/${mes} do ano de ${ano}`;
}

function fechar() {
    window.close();
}