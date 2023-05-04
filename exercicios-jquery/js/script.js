$(document).ready(function () {
  exercicio01();
  exercicio02();
  // cada item do exercício 03 está localozado no diretório /exercicio03
  exercicio04();
});

function exercicio01() {
  const qA = $(".module");
  console.log(qA);

  const qB = $("#myList>li:eq(2)");
  console.log(qB);

  const qC = $("label[for='q']");
  console.log(qC);

  const qD = $("[alt]").length;
  console.log(qD);

  const qE = $("#fruits tbody tr:even");
  console.log(qE);

  const qF = $("h2:contains(B):contains(e)");
  console.log(qF);

  const qG = $("#myList li:not('.current')");
  console.log(qG);

  const qH = $("img:last, h3:last");
  console.log(qH);

  let qI = 0;
  $("#myList .current")
    .nextAll()
    .each(function () {
      qI += $(this).text().length;
    });
  console.log(qI);
}

function exercicio02() {
  adicionarLinhas();
  removeTextoPar();
  adicionarDiv();
}

function adicionarLinhas() {
  initial = $("#myList li").length + 1;

  for (let num = initial; num < initial + 5; num++) {
    $("#myList").append(`<li>List item ${num}</li>`);
  }
}

function removeTextoPar() {
  $("#myList li").each(function () {
    let text = $(this).text();
    let matches = text.match(/\d+/);
    if (matches !== null && parseInt(matches[0]) % 2 === 0) {
      $(this).remove();
    }
  });
}

function adicionarDiv() {
  let newDiv = $("<div>").addClass("module");
  let firstImage = $("img:first").clone();
  newDiv.append(firstImage);

  $("div.module:last").after(newDiv);
}

function exercicio04() {
  const imgsWithAlt = $("img[alt]");
  console.log(imgsWithAlt);

  $("input[name='q']").parent().addClass("template");

  $("#myList li.current").removeClass("current").next().addClass("current");

  $("#specials h2")
    .text("Promoções")
    .siblings("form")
    .find("option")
    .filter(function () {
      return $(this).val() === "friday";
    })
    .text("Dimitri");

  $("#slideshow li")
    .first()
    .addClass("current")
    .siblings()
    .addClass("disabled");
}
