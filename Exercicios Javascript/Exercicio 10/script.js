const USER_TYPES = [
  "administrador",
  "professor",
  "aluno",
  "estagiario",
  "funcionário",
  "pesquisador",
  "publico",
];

const USER_DEFAULT_PASSWORDS = [
  "1234administrador",
  "1234professor",
  "1234aluno",
  "1234estagiario",
  "1234funcionário",
  "1234pesquisador",
  "1234publico",
];

const userTypeSelect = document.getElementById("user-type");
const inputSenha = document.getElementById("senha");

USER_TYPES.forEach((userType, index) => {
  let newOption = document.createElement("option");
  newOption.value = index;
  newOption.innerHTML = userType;
  userTypeSelect.appendChild(newOption);
});

function validar() {
  let userTypeIndex = parseInt(userTypeSelect.value);
  let senha = inputSenha.value;

  if (userTypeIndex < 0) {
    alert("Selecione um tipo de usuário");
    userTypeSelect.focus();
    return false;
  }

  if (!senha) {
    alert("Informe uma senha");
    inputSenha.focus();
    return false;
  }

  if (senha.length < 8) {
    alert("A senha deve conter no mínimo 8 caracteres");
    inputSenha.focus();
    return false;
  }

  if (senha !== USER_DEFAULT_PASSWORDS[userTypeIndex]) {
    alert("Senha incorreta");
    inputSenha.focus();
    return false;
  }

  return true;
}
