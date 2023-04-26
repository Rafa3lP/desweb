function setPageColors() {
    const hours = (new Date()).getHours();

    // fundo azul com letras brancas
    let bgColor = "blue";
    let fgColor = "white";

    if(hours >= 6 && hours < 12) {
        //fundo branco e letras pretas
        bgColor = "white";
        fgColor = "black";
    } else if(hours >= 12 && hours < 18){
        // fundo amarelo e letras pretas
        bgColor = "yellow";
        fgColor = "black";
    } else if(hours >= 18 && hours < 24) {
        // fundo escuro com letras brancas
        bgColor = "#333";
    }

    document.bgColor = bgColor;
    document.fgColor = fgColor;

}