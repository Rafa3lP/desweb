function submitForm(evt) {
  evt.preventDefault();
  const data = document.form.data.value;
  
  const dateRegex = new RegExp("\\d{2}/\\d{2}/\\d{4}");

  if(dateRegex.test(data)) {
    document.getElementById("erro").innerHTML = "";
    document.form.data.style.backgroundColor = "";

    const dateArr = data.split("/");
    const today = new Date();
    const dateObj = new Date(
      parseInt(dateArr[2]),
      parseInt(dateArr[1]) - 1,
      parseInt(dateArr[0])
    );

    const diff = dateObj.getTime() - today.getTime();

    if(diff < 0) {
      document.getElementById("resultado").innerHTML = "A data inserida é menor do que a data de hoje";
    } else {
      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const months = Math.floor(days / 30);
      const years = Math.floor(months / 12);
      document.getElementById("resultado").innerHTML = `Faltam ${days % 30} dias, ${months % 12} meses e ${years} anos para a data inserida`;
    }

  } else {
    document.getElementById("erro").innerHTML = "Digite uma data no formato dd/mm/aaaa";
    document.form.data.style.backgroundColor = "yellow";
    document.form.data.focus();
  }

}