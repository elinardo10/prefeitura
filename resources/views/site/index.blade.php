@extends('layouts.site.site')

@section ('titulo')
:: Limoeiro  do Norte ::
@stop

@section('conteudo')
<!--INÍCIO CAROUSEL-->
<section id="carousel-home" class="container-fluid">
  <div class="row">
    <div id="featured-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#featured-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#featured-carousel" data-slide-to="1"></li>
        <li data-target="#featured-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="{{ asset('img/slide1.jpg') }}" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lazer e Turismo</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#featured-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#featured-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>

<!--INÍCIO NOTÍCIAS-->
<section id="news" class="container-fluid">
  <div class="container" id="conteudo">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-header">
          <p>Notícias</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-4"><img src="http://placehold.it/400x250" class="img-responsive" alt="..."></div>
          <div class="col-sm-8">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
            <small><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12/12/2016 15:36</small>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero...</p>
            <p><a href="#">Ver mais</a></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-4"><img src="http://placehold.it/400x250" class="img-responsive" alt="..."></div>
          <div class="col-sm-8">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
            <small><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12/12/2016 15:36</small>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero...</p>
            <p><a href="#">Ver mais</a></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-4"><img src="http://placehold.it/400x250" class="img-responsive" alt="..."></div>
          <div class="col-sm-8">
            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
            <small><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 12/12/2016 15:36</small>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero...</p>
            <p><a href="#">Ver mais</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#latests" aria-controls="latests" role="tab" data-toggle="tab">Recentes</a></li>
          <li role="presentation"><a href="#top" aria-controls="top" role="tab" data-toggle="tab">Mais vistas</a></li>
        </ul>
        <br>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="latests">
            <div class="media">
              <div class="media-left">
                <a href="#"><img class="media-object" src="http://placehold.it/60x60" alt="..."></a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="top">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="http://placehold.it/60x60" alt="...">
                </a>
              </div>
              <div class="media-body">
                <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--.row-->

    <div class="row">
      <div class="col-sm-3 col-md-offset-9">
        <div class="section-bottom">
          <a href="#" class="btn btn-default center-block" role="button">Ver todas as notícias</a>
        </div>
      </div>
    </div><!--.row-->
  </div>
</section>
<!--FIM NOTÍCIAS-->


<!--INÍCIO EVENTOS-->
<section id="events" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-header">
          <p>Eventos</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
      <div class="col-sm-4">
        <img src="http://placehold.it/400x250" class="img-responsive" alt="...">
        <div class="caption">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam id quam et erat porta consectetur et ut libero.</p>
          <p><a href="#">Ver mais</a></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 col-md-offset-9">
        <div class="section-bottom">
          <a href="#" class="btn btn-default center-block" role="button">Ver todos os eventos</a>
        </div>
      </div>
    </div><!--.row-->
  </div>
</section>
<!--FIM EVENTOS-->

<!--INÍCIO SERVIÇOS-->
<section id="services" class="container-fluid">
  <div class="container">
    <div class="row">
      <div id="carousel2" class="carousel slide multi-item-carousel">
        <div class="carousel-inner"> 
          <div class="item active">
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
          </div>

          <div class="item">
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
            <div class="col-sm-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x120" class="img-responsive" alt=""></a></div>
          </div>
        </div><!--/carousel-inner-->
                 
        <a class="left carousel-control" href="#carousel2" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#carousel2" data-slide="next">›</a>
      </div><!--/myCarousel-->
    </div><!--.row-->
  </div>
</section>
<!--FIM SERVIÇOS-->

<!--INÍCIO MULTIMÍDIA-->
<section id="multimedia" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="page-header">
          <p>Multimídia</p>
        </div>
      </div>
    </div><!--.row-->
    <div class="row">
      <div class="col-sm-3">
        <a href="#"><img src="http://placehold.it/250x200" alt="..." class="img-responsive"></a>
        <small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 12/12/2016</small>
        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
      </div>
      <div class="col-sm-3">
        <a href="#"><img src="http://placehold.it/250x200" alt="..." class="img-responsive"></a>
        <small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 12/12/2016</small>
        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
      </div>
      <div class="col-sm-3">
        <a href="#"><img src="http://placehold.it/250x200" alt="..." class="img-responsive"></a>
        <small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 12/12/2016</small>
        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
      </div>
      <div class="col-sm-3">
        <a href="#"><img src="http://placehold.it/250x200" alt="..." class="img-responsive"></a>
        <small><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 12/12/2016</small>
        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
      </div>
    </div><!--.row-->
    <div class="row">
      <div class="col-sm-3 col-md-offset-9">
        <div class="section-bottom">
          <a href="#" class="btn btn-default center-block" role="button">Ver mais vídeos</a>
        </div>
      </div>
    </div><!--.row-->
  </div><!--.container-->
</section>
<!--FIM MULTIMÍDIA-->

<!--INÍCIO MAPA-->
<section id="location">
  <div class="container-fluid">
    <div class="row">
      <div id="map" style="height:400px;"></div>
    </div>
  </div>
</section>
<!--FIM MAPA-->

<!--INÍCIO NEWSLETTER-->
<section id="newsletter">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="single">
          <h2>Cadastre-se em nossa Newsletter</h2>
          <p><small>Receba novidades sobre a prefeitura no seu e-mail</small></p>
          <hr>
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Digite seu e-mail">
            <span class="input-group-btn">
              <button class="btn" type="submit">Inscrever-se</button>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--FIM NEWSLETTER-->
@stop