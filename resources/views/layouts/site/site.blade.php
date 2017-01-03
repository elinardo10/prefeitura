<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>

    <!-- Latest compiled and minified CSS -->
   
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<aside>
  <ul class="social hidden-xs hidden-sm">
    <li><a class="fa fa-facebook" href="#"><span></span></a></li>  
    <li><a class="fa fa-twitter" href="#"><span></span></a></li>  
    <li><a class="fa fa-instagram" href="#"><span></span></a></li>  
    <li><a class="fa fa-google-plus" href="#"><span></span></a></li>
    <li><a class="fa fa-angle-up" href="#header-top"><span></span></a></li>
  </ul>
</aside>
<header class="container-fluid">
  <!-- MENU SECUNDÁRIO -->
  <div class="row hidden-xs hidden-sm">
    <nav class="navbar navbar-default yamm navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <p class="navbar-text">Limoeiro do Norte, {{date('d')}} de {{date('F')}} de {{date('Y')}}</p>
        </div>
        <ul class="nav navbar-nav" style="float:right;">
          <li><a href="javascript:mudacontraste('a')" class="navbar-link">Contraste</a></li>
          <li><a href="javascript:mudaFonte('+','tabela')" class="navbar-link" title="AUMENTAR O TAMANHO DO TEXTO">A+</a></li>
          <li><a href="javascript:mudaFonte('-','tabela')" class="navbar-link" title="DIMINUIR O TAMANHO DO TEXTO">a-</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="row">
    <section id="header-top">
      <div class="container">
        <!-- CABEÇALHO ESQUERDA -->
        <div class="col-lg-4 col-md-5"><img src="{{ asset('img/logo.png')}}" class="img-responsive" alt="" style="margin:20px 0;"></div>

        <!-- CABEÇALHO MEIO -->
        <div class="col-lg-4 col-md-3">
        </div>

        <!-- CABEÇALHO DIREITA -->
        <div class="col-lg-4 col-md-4 hidden-xs" style="padding:15px 0;">

          <!-- TEMPERATURA -->
          <div class="row">
            <div class="col-sm-2">
              <p style="font-size:32px; font-weight:bold; margin-bottom:0;"><span id="currentTemperature"></span><span>°</span></p>
            </div>
            <div class="col-sm-10">
              <small><span id="hourlySummary"></span></small><br>
              <small>Humidade: <span id="humidity"></span></small><br>
              <!--<small>Força do vento: <span id="currentWind"></span> Km/h</small><br>-->
            </div>
          </div>
          <hr>
          <!-- BUSCA -->
          <div class="row">
            <form id="search" method="get" action="">
              <div class="input-group">
                <input type="text" class="form-control" aria-label="..." placeholder="O que você procura?">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!-- MENU PRINCIPAL -->
   @include('layouts.site.menu_principal')
  </div>
</header>

 @yield('conteudo')


<!--INÍCIO RODAPÉ-->
<footer class="container-fluid">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <ul>
          <li class="footer-menu-title">Sobre o município</li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> História</a></li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Geografia</a></li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Economia</a></li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Turismo</a></li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Cultura</a></li>
          <li class="footer-menu-link"><a href="#"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Símbolos</a></li>
        </ul>
      </div>

      <div class="col-md-4 ">
        <ul>
          <li class="footer-menu-title">Curta nosso Facebook</li>
          <div class="fb-page" data-href="https://www.facebook.com/preflimoeiro/?fref=ts" data-width="400" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/preflimoeiro/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/preflimoeiro/?fref=ts">Prefeitura Municipal de Limoeiro do Norte</a></blockquote></div>
        </ul>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="col-md-12">
          <address>
            <strong>Localização</strong><br />
            PREFEITURA MUNICIPAL DE LIMOEIRO DO NORTE
            RUA CEL. ANTÔNIO JOAQUIM, 2121<br />
            CENTRO - LIMOEIRO DO NORTE – CE , CEP: 62.930-000<br />
            <abbr title="Telefone">Fone:</abbr> (88) 3423-1165
          </address>     
        </div>
        <div id="social-menu">
          <div class="col-md-3"><a href="#" class="btn btn-lg" id="facebook" title="Facebook"><span class="fa fa-facebook"></span></a></div>
          <div class="col-md-3"><a href="#" class="btn btn-lg" id="twitter" title="Twitter"><span class="fa fa-twitter"></span></a></div>
          <div class="col-md-3"><a href="#" class="btn btn-lg" id="googlep" title="Google +"><span class="fa fa-google-plus"></span></a></div>
          <div class="col-md-3"><a href="#" class="btn btn-lg" id="instagram" title="Instagram"><span class="fa fa-instagram"></span></a></div>
        </div>
      </div>

      <div class="col-md-2 col-sm-6">
        <img src="{{ asset('img/brasao.png')}}" class="img-responsive center-block" alt="" style="max-height:180px;">
      </div>
    </div>
  </div>
</footer>
<!--FIM RODAPÉ-->

<!--COPYRIGHT-->
<section id="copyright" class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <p class="text-center">Copyright © {{ date('Y') }} | Prefeitura Municipal de Limoeiro do Norte | Desenvolvido por: <a href="https://www.facebook.com/elinardosilva">EsTech</a></p>
    </div>
  </div>
</section>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{!! asset('js/app.js') !!}"></script>
  <!-- Latest compiled and minified JavaScript -->
  
  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css"></script>
  <script>
    function initMap() {
      var limo = {lat: -5.1480107, lng: -38.0995};
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: limo,
        disableDefaultUI: false,
        navigationControl: false,
        mapTypeControl: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var marker = new google.maps.Marker({
        position: limo,
        map: map
      });
    }


  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHbI4RBOo0PnVvUft9mJApG4YnWTjrQLo&callback=initMap"></script>

  <script>
    $(function() {
      window.prettyPrint && prettyPrint()
      $(document).on('click', '.yamm .dropdown-menu', function(e) {
        e.stopPropagation()
      })
    })

    $(document).ready(function() {
      $('#carousel2').carousel({
        interval: 5000
      });
      $('#carousel3').carousel({
        interval: 5000
      });
      $('#carousel4').carousel({
        interval: 5000
      })
    });

    $(document).ready(function(){
      var apiKey = 'b04dbf475994a98f5849aa6856a4596d';
      var curl = 'https://api.forecast.io/forecast/';
      var lati = -5.1480107;
      var longi = -38.0995;
      var data;
      $.ajax({
        type: "GET",
        url: curl + apiKey +"/"+ lati +","+ longi + "?callback=?&units=uk&lang=pt",
        dataType: "json",
        success: function(data){
          //var json = $.parseJSON(data);
          console.log(data);
          $("#currentTemperature").append(Math.floor(data.currently.apparentTemperature));
          $("#currentTime").append(Date(data.currently.time));
          if(data.currently.icon == 'clear-day') { $("#currentIcon").addClass("wi-day-sunny") };
          if(data.currently.icon == 'clear-night') { $("#currentIcon").addClass("wi-night-clear") };
          if(data.currently.icon == 'rain') { $("#currentIcon").addClass("wi-rain") };
          if(data.currently.icon == 'snow') { $("#currentIcon").addClass("wi-snow") };
          if(data.currently.icon == 'sleet') { $("#currentIcon").addClass("wi-day-sleet") };
          if(data.currently.icon == 'wind') { $("#currentIcon").addClass("wi-day-windy") };
          if(data.currently.icon == 'fog') { $("#currentIcon").addClass("wi-fog") };
          if(data.currently.icon == 'cloudy') { $("#currentIcon").addClass("wi-cloudy") };
          if(data.currently.icon == 'partly-cloudy-day') { $("#currentIcon").addClass("wi-day-cloudy") };
          if(data.currently.icon == 'partly-cloudy-night') { $("#currentIcon").addClass("wi-night-cloudy") };
          if(data.currently.icon == 'hail') { $("#currentIcon").addClass("wi-hail") };
          if(data.currently.icon == 'thunderstorm') { $("#currentIcon").addClass("wi-thunderstorm") };
          if(data.currently.icon == 'tornado') { $("#currentIcon").addClass("wi-meteor") };
          $("#humidity").append(data.currently.humidity);
          $("#currentWind").append(data.currently.windSpeed);
          $("#hourlySummary").append(data.hourly.summary);
          $("#currentSummary").append(data.currently.summary);
          $("#daily_summary").append(data.daily.summary);
          $("weekly").append(data.daily.data[0].apparentTemperatureMax);
        },
        error: function() {
          alert("An error occurred");
        }
      });
    });

    //script para aumentar tamanho da fonte:

                var tam = 1;
                var pad = 1;
                //Mudar Tamanho da fonte
                function mudaFonte(tipo, div)
                {
                    if (tipo == "+")
                    {
                        if (tam < 5)
                            tam += 0.1;
                    } else if (tipo == "-")
                    {
                        if (tam > 0.7)
                            tam -= 0.1;
                    } else {
                        tam = pad;
                    }
                    document.getElementById(div).style.fontSize = tam + 'em';
                }
                //Função para impressão de conteudo.
                function printDiv(divID)
                {
                    var conteudo = document.getElementById(divID).innerHTML;
                    var win = window.open();
                    win.document.write(conteudo);
                    win.print();
                    win.close();
                }


    function mudalingua(Lingua) {
        document.getElementById("lgt").value = Lingua;
        document.forms["mlg"].submit();
    }
    function mudacontraste(Contraste) {
        document.getElementById("lct").value = Contraste;
        document.forms["mct"].submit();
    }


  </script>
  </body>
</html>