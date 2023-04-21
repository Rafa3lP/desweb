var estoque = [];
$(document).ready(function() {
    var produto = {};

    $("#btnCarregar").click((evt) => {
        evt.preventDefault();
        $.getJSON('js/meujson.json', function(alunos) {
            //console.log(alunos);
            $("#area").text(JSON.stringify(alunos));
        });
    });

    $("#btnInserir").click(function(evt) {
        evt.preventDefault();
        var codigo = $("#pCodigo").val();
        var nome = $("#pCodigo").val();
        var valor = $("#pCodigo").val();

        var produto = {codigo, nome, valor};

        estoque.push(produto);

        $("#area").text(JSON.stringify(estoque));
    });
});