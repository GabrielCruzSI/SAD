
var numDePaginas = emprestimos.length/6;
var tamanhoDeCadaPagina = emprestimos.length / numDePaginas;

function inicializa() {
    numeroDaPagina();
    criaTabela(1);
}

function encerra() {
  $("#tabela-livros-emprestados").find("tbody").children().remove();
}

function testaPagination(op) {
  switch (op) {
    case 1:
        var itensAdicionais = $(".pagination").find("li").length - 1;
        if(itensAdicionais == 0){
          console.log("1");
          return "vazio";
        }else {
          return "cheio";
        }
    break;
  }
}

function numeroDaPagina() {
  $(".pagination").click(function (event) {
    event.preventDefault();
    var numeroDaPagina = event.target.textContent;
    if(numeroDaPagina == undefined){
      return;
    }else{
      $("#tabela-livros-emprestados").find("tbody").children().remove();
      criaTabela(event.target.textContent);
    }

  });
}

function dividePaginas(emprestimos) {
  var pagina = [];
  var indiceMaximo = emprestimos.length;//Define o maximo de emprestimos
  var indiceMinimo = 0;//Define o minimo de emprestimos
  for (var i = 1; i <= numDePaginas; i++) {
      pagina[i] = new Array()//Cria um novo Array na posicao [i] de pagina
    for (var j = 0; j < tamanhoDeCadaPagina; j++) {
      /*
        Preenche a página na posicao [i][j] com o emprestimos que tem na posicao indiceMinimo
                      '[indiceMinimo == indiceMaximo ? 0 : indiceMinimo]'
        perceba que usei a expressão acima (operador ternário), para saber se ja percorremos todo o vetor de emprestimos
      */
      pagina[i][j] = emprestimos[indiceMinimo == indiceMaximo ? 0: indiceMinimo];
      indiceMinimo++;
    }
  }

  /*
    Retorna a matriz página que contem uma quantidade m para cada indice n de si.
    Onde n == Numero De Paginas | m == Tamanho De Cada Pagina (Definidos nas linhas 173, 174)
  */
  return pagina;
}

function criaTabela(numeroDaPagina) {

  if(testaPagination(1) == "vazio"){
    criaPaginacao();
  }

  var Corpotabela = $("#tabela-livros-emprestados").find("tbody");

  var listaDeEmprestimo = dividePaginas(emprestimos);
  listaDeEmprestimo[numeroDaPagina].forEach(function (linha) {
    Corpotabela.append(criaLinha(linha));
  });

}

function criaPaginacao() {

  for (var i = 1; i <= numDePaginas; i++) {
    $(".pagination").append(criaNumeroDePaginacao(i));
  }

  finalizaPaginacao();
}

function criaNumeroDePaginacao(numeroDaPagina) {

  var item = $("<li>");
  var link = $("<a>");
  link.text(numeroDaPagina);
  link.attr("href", "#");
  item.append(link);
  return item;
}

function finalizaPaginacao() {
  var item = $("<li>");

  var link = $("<a>");
  link.attr("href", "#");
  link.attr("aria-label", "Next");

  var span = $("<span>");
  span.attr("aria-label", "true");
  span.append("&raquo;");

  link.append(span);
  item.append(link);

  $(".pagination").append(item);

}

function criaLinha(emprestimo) {

  var linha = $("<tr>");

  linha.append(criaColuna(emprestimo.nomeDoLivro));
  linha.append(criaColuna(emprestimo.nomeDoAutor));
  linha.append(criaColuna(emprestimo.dataEmprestimo));
  linha.append(criaColuna(emprestimo.dataDevolucao));
  linha.append(criaColuna(emprestimo.multas));

  return(linha);
}

function criaColuna(conteudo) {
  var coluna = $("<td>");
  coluna.text(conteudo);
  return coluna;
}

$("#btn-back").click(function (event) {
  event.preventDefault();
  $("#livros-emprestados").addClass("invisivel");
  $("#btn-opcoes").removeClass("invisivel");
  encerra();
});
