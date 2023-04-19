/*
mesmo que  
    $(document).ready(function(){

    });
*/
$(() => {
    // $("#btTexto").on("click", () => {
    //     $("#texto").text("Texto modificado!");
    // });

    $("#reset").css("background-color", 'lightcoral');

    $("button:contains('Fundo')").click(() => {
        const valor = parseInt(Math.random() * 10);
        if (valor % 3 == 0) {
            $(document).attr("bgColor", "lightgreen");
        } else {
            $(document).attr("bgColor", "lightgrey");
        }
    });

    $("button:contains('Texto')").on("click", () => {
        $("#texto").text("Texto modificado!");
    });

    $("#reset").click(() => {
        location.reload();
    });

    $("button:eq(2)").click(() => {
        $("#imagem").attr("src", "imagens/arquitetura.png");
    });

    $("#imagem").dblclick(function () {
        $(this).attr("src", "");
    });

    $("#bt-card").click(() => {
        $("#este").css("display", "contents");
    });

    $("#este").dblclick(function () {
        $(this).css("display", "none");
    });

    $("#botoes>button:eq(3)").click(() => {
        $("#tabela").css("background-color", 'goldenrod');
        // $("#tabela").attr("border", '11');
        // $("#tabela").attr("width", '70%');
        $("#tabela").attr({
            border: '11',
            width: '70%'
        });
    });

    $("input[type='text']").focus(function () {
        $(this).css("background-color", "bisque");
    });

    $("input[type='text']").blur(function () {
        $(this).css("background-color", "");
    });

    $("button:last").click(() => {
        // $("#lista").append("<li>Consegui!</li>");
        //$("#lista").prepend("<li>Consegui!</li>");

        //$("#lista > li:eq(1)").before("<li>Terceiro</li>");
        $("#lista > li:eq(1)").after("<li>Terceiro</li>");
    });

    $("#tabela").mouseover(function() {
        $(this).removeClass();
        $(this).addClass("table");
    });

    $("#tabela").mouseleave(function() {
        $(this).removeClass();
        $(this).addClass("table2");
    });

});