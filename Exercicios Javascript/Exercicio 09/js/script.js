function validar(event) {
  event.preventDefault();
  const checkboxes = document.form.querySelectorAll(
    "input[type='checkbox'][name='grupo']"
  );

  for(const checkbox of checkboxes) {
    if(checkbox.checked) {
        alert("Sucesso: Ao menos um checkbox foi marcado");
        return true;
    }
  }
  alert("Erro: é necessário marcar pelo menos um checkbox");
  return false;
}
