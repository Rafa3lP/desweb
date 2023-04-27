const pagina = document.implementation.createHTMLDocument("Nova página");

function preview() {
  updatePagina();

  const paginaPreview = window.open("", "_blank", "width=500, height=500");
  paginaPreview.document.write(pagina.documentElement.outerHTML);
}

function gerarPagina() {
    document.getElementById("result").value = pagina.documentElement.outerHTML;
}

function updatePagina() {
  const titulo = document.getElementById("titulo").value;
  const subtitulo1 = document.getElementById("subtitulo1").value;
  const subtitulo2 = document.getElementById("subtitulo2").value;
  const texto1 = document.getElementById("texto1").value;
  const texto2 = document.getElementById("texto2").value;
  const corFundo = document.getElementById("corFundo").value;
  const corTexto = document.getElementById("corTexto").value;

  let codigoHTML = `
    <h1>${titulo}</h1>
    <h2>${subtitulo1}</h2>
    <h3>${subtitulo2}</h3>
    <section>
        <p>${texto1}</p>
    </section>
    <section>
        <p>${texto2}</p>
    </section>
  `;

  pagina.body.innerHTML = codigoHTML;
  pagina.body.style.backgroundColor = corFundo;
  pagina.body.style.color = corTexto;
}