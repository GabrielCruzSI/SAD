<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SAD - Sistema de Aviso de Devolução</title>

    <!-- Bootstrap
    <link href="css/reset.css" rel="stylesheet">-->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/emprestar-livro.css" rel="stylesheet">
    <link href="css/livros-emprestados.css" rel="stylesheet">
    <!-- ... -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <aside>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>SAD - Sistema ...</h1>
          </div>
        </div>
      </div>
    </aside>

    <div class="container">
      <div class="row">
          <div id="cabecalho">
            <div class="col-md-8">
              <div class="brand">
                <span>sad</span>
              </div>
            </div>
            <div class="col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Pesquisar...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
                </div><!-- /input-group -->
            </div><!-- Fim col-md-5-->
        </div><!-- Fim da Div Teste-->
      </div><!-- Fim da Row -->

      <div class="row">
        <div id="dash-conteudo">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#livrosAtivos" aria-controls="livrosAtivos" role="tab" data-toggle="tab">Dashboad</a></li>
              <li role="presentation"><a href="#multas" aria-controls="multas" role="tab" data-toggle="tab">Multas</a></li>
              <li role="presentation"><a href="#backlogDeLivros " aria-controls="backlogDeLivros" role="tab" data-toggle="tab">Backlog De Livros</a></li>
              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="livrosAtivos">

                <div id="btn-opcoes" class="a">
                    <div class="col-md-8 teste">
                      <button class="col-md-6 btn btn-default opcoes" type="button" name="emprestar-livro" ><span class="text-op"><i class="material-icons">library_add</i></span></button>
                      <button class="col-md-6 btn btn-default opcoes" type="button" name="livros-emprestados"><span class="text-op"><i class="material-icons">list</i></span></button>
                      <button class="col-md-6 btn btn-default opcoes" type="button" name="multas"><span class="text-op"><i class="material-icons">money_off</i></span></button>
                      <button class="col-md-6 btn btn-default opcoes" type="button" name="favoritos"><span class="text-op"><i class="material-icons">star_border</i></span></button>
                    </div>
                    <div class="col-md-4">
                      <button class="col-md-12 btn btn-default opcoes" type="button" name="button"><span class="a"><i class="material-icons">star_border</i></span></button>
                    </div>
                </div>

                <div id="emprestar-livro" class="invisivel">
                  <div class="col-md-6">
                    <div class="col-md-12">
                        <button id="a" class="btn btn-warning" type="button" name="button"><span class="glyphicon glyphicon-chevron-left"></span>Voltar</button>
                    </div>
                    <div id="session-emprestar-livro">
                      <form action="" data-toggle="validator">
                          <div class="form-group">
                            <label>Nome do Livro</label>
                              <input class="form-control" type="text" id="livro" name="livro" value="" placeholder="Digite o nome do livro" required>
                              <div class="help-block with-errors"></div>
                          </div>

                          <div class="form-group">
                            <label>Autor</label>
                              <input class="form-control" type="text" name="autor" value="" disabled="disabled">
                          </div>

                          <form class="" method="post" data-toggle="validator">
                            <div class="form-group">
                                <div class="panel panel-default">
                                  <div class="panel-heading center"><label>Validação de ISBN</label></div>
                                  <div class="panel-body">
                                    <div id="isbn" class="form-group">
                                      <label>Numeros</label>
                                        <input class="form-control" type="text" name="isbn" value="" data-error:"O texto pode estar Errado." required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div id="valida-isbn" class="form-group invisivel">
                                      <label>Texto</label>
                                        <input class="form-control" type="text" name="texto" value="" data-error:"O txto pode estar Errado." required>
                                        <div class="help-block with-errors"></div><br>
                                        <div class="panel panel-default">
                                          <div class="panel-body">
                                            123
                                          </div>
                                        </div>
                                        <button class="btn btn-default btn-block" type="button" name="button">Validar</button>
                                      </div>
                                  </div>
                                </div>
                            </div>
                          </form>

                          <div id="data-renovar">
                            <div class="form-group">
                              <label>Data de Empréstimo</label>
                              <div class="input-group date" >
                                <input type="text" class="form-control" id="data" name="data" required>
                                <div class="help-block with-errors"></div>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label><input type="checkbox" name="renovar" value=""> Pretendo Renovar</label>
                            </div>

                            <button class="btn btn-default btn-block" type="button" id="emprestar" name="cadastrar">Emprestar</button>
                          </div>

                      </form>

                    </div>


                    </div><!-- Fim col md 6-->

                    <div class="col-md-6">
                      <div id="imagem-livro">
                        <i class="material-icons">crop_original</i>

                      </div>
                    </div>

                  </div><!-- Fim Livros Ativos-->

                <div id="livros-emprestados" class="invisivel">

                    <div class="session-livros-emprestados">
                      <div class="col-md-12" id="linha">
                        <button id="btn-back" class="btn btn-warning" type="button" name="button"><span class="glyphicon glyphicon-chevron-left"></span>Voltar</button>

                        <nav aria-label="Page navigation" id="paginator">
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>

                          </ul>
                        </nav>
                      </div>
                      <table class="table table-striped" id="tabela-livros-emprestados">
                        <thead>
                          <tr>
                            <th>Nome do Livro</th>
                            <th>Nome do Autor</th>
                            <th>Data Empréstimo</th>
                            <th>Data Devolução</th>
                            <th>Multas</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>

                  </div>
                </div>

              </div>

              <div role="tabpanel" class="tab-pane" id="multas">
                Muultas
              </div>
              <div role="tabpanel" class="tab-pane" id="backlogDeLivros">
                Backlog
              </div>
              <div role="tabpanel" class="tab-pane" id="settings">...</div>
            </div>
        </div>
      </div>

    </div><!-- Fim do Container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->


    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/navegacaoPorMenus.js"></script>
    <script src="js/emprestarLivro.js"></script>

    <!-- Só pra testar a sessão livros-emprestados -->
    <script src="js/livros-emprestados-data.js"></script>

    <script src="js/livros-emprestados.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="js/validator.min.js"></script>
    <script type="text/javascript">
      $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });

      $('#data').datepicker({
          format: 'dd/mm/yyyy',
          language:"pt-BR",
          startDate: "+0d",
          orientation: "left",
          todayHighlight: "true",
      });



    </script>
  </body>
</html>
