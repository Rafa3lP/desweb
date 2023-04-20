$(() => {
    $("button[name='btnlink']").click(() => {
        const valInput = $("input[name='txtlink']").val();

        if(valInput.startsWith("www")) {
            $("a:first").attr({
                href: `http://${valInput}`,
                target: "_blank"
            });

            $("a:first").text(valInput);
        } else {
            alert("Precisa iniciar com www");
            $("input[name='txtlink']").val("");
        }

    });

    $("div:first").mouseover(function() {
        $(this).addClass("conteudo");
    });

    $("div:first").mouseleave(function() {
        $(this).removeClass("conteudo");
    });

    $("#btntabela").click(() => {
        $("table tr:last").clone().appendTo("table");
    });

    $("button[name='btnincluir']").click(() => {
        $("ul > li:eq(2)").clone().prependTo("ul");
        $("ul > li:contains('jQuery')").text("Travado pela linguagem!");
    });
});