function login(event) {
  event.preventDefault();
  const usuario = formLogin.usuario.value;
  const senha = formLogin.senha.value;

  if (usuario === "sergio" && senha === "lenda") {
    const result = document.getElementById("result");
    result.style.color = "green";
    result.textContent = "Seja bem vindo";
  } else {
    const result = document.getElementById("result");
    result.style.color = "red";
    result.textContent = "Login incorreto";
  }
}
