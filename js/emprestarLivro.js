$("#isbn").click(function () {
  $("#valida-isbn").removeClass("invisivel");
  $("#data-renovar").addClass("invisivel");
});

$("#a").click(function (event) {
  event.preventDefault();
  $("#emprestar-livro").addClass("invisivel");
  $("#btn-opcoes").removeClass("invisivel");
});
