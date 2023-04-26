var pagina = null;

function criar(){
  if(pagina) fechar();
  pagina = window.open("", "_blank", "width=500, height=500");
}

function escrever() {
  if(pagina) {
    pagina.document.write("Texto qualquer");
  }
}

function mudar() {
  if(pagina) {
    pagina.document.bgColor = "blue";
    pagina.document.fgColor = "white";
  }
}

function fechar() {
  if(pagina) {
    pagina.close();
    pagina = null;
  }
}