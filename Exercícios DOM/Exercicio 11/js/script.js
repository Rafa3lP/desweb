function zebrar() {
    const linhas = document.querySelectorAll(".zebra tbody tr");
    linhas.forEach((linha, idx) => {
        if(idx % 2 !== 0) {
            linha.className = 'zebraon';
        }
    })
}