 <div class="row">
      <nav class="navbar navbar-inverse navbar-static-top yamm" data-spy="affix" data-offset-top="200">
        <div class="container">
          <div class="navbar-header">
            <!-- BOTÃO DE NAVEGAÇÃO -->
            <button type="button" data-toggle="collapse" data-target="#navbar-main-menu" class="navbar-toggle">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- BUSCA -->
            <form id="search-mobile" class="visible-xs" method="get" action="">
              <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="O que você procura?">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
              </div>
            </form>
          </div>
          <div id="navbar-main-menu" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{route('site.index')}}" alt="Início"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>

              <!-- O MUNICÍPIO -->
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">O município<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="yamm-content">
                      <div class="row">
                        <ul class="col-xs-4 list-unstyled">
                          <li><p><strong>Sobre o município</strong></p></li>
                          <li><a href="{{route('site.historia')}}">História</a></li>
                          <li><a href="#">Geografia</a></li>
                          <li><a href="#">Economia</a></li>
                          <li><a href="#">Turismo</a></li>
                          <li><a href="#">Cultura</a></li>
                          <li><a href="#">Símbolos</a></li>
                        </ul>
                        <ul class="col-xs-4 list-unstyled">
                          <li><p><strong>Sobre a prefeitura</strong></p></li>
                          <li><a href="#">Prefeito</a></li>
                          <li><a href="#">Vice prefeito</a></li>
                          <li><a href="#">Contas públicas</a></li>
                          <li><a href="#">Licitações</a></li>
                          <li><a href="#">Concursos</a></li>
                          <li><a href="#">Legislação</a></li>
                        </ul>
                        <ul class="col-xs-4 list-unstyled">
                       <li><img src="{{ asset('img/img_sobre.jpg')}}" alt="..." class="img-rounded img-responsive"></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>

              <!--DEPARTAMENTOS-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Departamentos<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="yamm-content">
                      <div class="row">
                        <ul class="col-xs-3 list-unstyled">
                          <li><strong><a href="secretaria.html">Gabinete do prefeito</a></strong></li>
                        </ul>
                        <ul class="col-xs-3 list-unstyled">
                          <li><p><strong>Secretarias</strong></p></li>
                          <li><a href="secretaria.html">Secretaria A</a></li>
                          <li><a href="secretaria.html">Secretaria B</a></li>
                          <li><a href="secretaria.html">Secretaria C</a></li>
                          <li><a href="secretaria.html">Secretaria D</a></li>
                          <li><a href="secretaria.html">Secretaria E</a></li>
                          <li><a href="secretaria.html">Secretaria F</a></li>
                        </ul>
                        <ul class="col-xs-3 list-unstyled">
                          <li><p><strong>Outros orgãos</strong></p></li>
                          <li><a href="secretaria.html">Consultoria</a></li>
                          <li><a href="secretaria.html">Controladoria</a></li>
                          <li><a href="secretaria.html">Procuradoria</a></li>
                          <li><a href="secretaria.html">Departamento A</a></li>
                          <li><a href="secretaria.html">Departamento B</a></li>
                          <li><a href="secretaria.html">Departamento C</a></li>
                        </ul>
                        <ul class="col-xs-3 list-unstyled">
                          <li><img src="http://placehold.it/350x350" alt="..." class="img-rounded img-responsive"></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>

              <!--INFORMATIVOS-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Informativos<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#"> Notícias </a></li>
                  <li><a tabindex="-1" href="#"> Eventos </a></li>
                  <li><a tabindex="-1" href="#"> Agenda </a></li>
                </ul>
              </li>

              <!--TRANSPARÊNCIA-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Transparência<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#"> Contas públicas </a></li>
                  <li><a tabindex="-1" href="#"> Portal da transparência </a></li>
                  <li><a tabindex="-1" href="#"> Solicitação de acesso à informação </a></li>
                  <li><a tabindex="-1" href="#"> Ouvidoria </a></li>
                </ul>
              </li>
              <li><a href="http://186.202.136.236:90/NfseLimoeiro/" target="_blank">Nf-e</a></li>

              <!--CONTATO-->
              <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contato<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefones úteis e endereços </a></li>
                  <li><a tabindex="-1" href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Fale conosco </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>