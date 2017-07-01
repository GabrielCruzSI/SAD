$("#btn-opcoes").click(function (event) {
  event.preventDefault();

  //====Definindo Hierarquias

  //Quem foi clicado
  alvo = event.target.name == undefined ? undefined :  event.target.name;

  //O cara que tem contém o id do serviço requerido
  paiMaior = event.target.parentNode.parentNode.name == undefined ? undefined :  event.target.parentNode.parentNode.name;

  //Filtro para saber qual parâmetro será enviado à função escolheMenu.(paiMaior ou alvo)
  if (alvo == undefined) {
    escolheMenu(paiMaior);
  }else {
    escolheMenu(alvo);
  }

  //Se o Alvo ou o paiMaior forem indefinidos, não faça nada
  if (!(alvo == undefined && paiMaior == undefined)) {
    this.classList.add("invisivel");
  }

});

function escolheMenu(funcao) {
  switch (funcao) {
    case "emprestar-livro":
        $("#emprestar-livro").removeClass("invisivel");
    break;
    case "livros-emprestados":
        $("#livros-emprestados").removeClass("invisivel");
        inicializa();
    break;

    default:
      return;

  }
}
