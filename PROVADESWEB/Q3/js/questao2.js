$(() => {
  $("#btnMostrar").click(function () {
    alert($("#myList li:eq(2)").text());
  });

  $("#btnRemover").click(function () {
    $("#myList li").each(function (index) {
      if (parseInt($(this).text().split(" ")[2]) % 2 === 0) {
        $(this).remove();
      }
    });
  });
});
