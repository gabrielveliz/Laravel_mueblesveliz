<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="img/icono.png"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Muebles y Colchones Veliz</title>
<!--

Template 2089 Meteor

http://www.tooplate.com/view/2089-meteor

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="{{ route('inicio') }}" class="navbar-brand">
                        <div class="logo"></div>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('inicio') }}" >Inicio</a></li>
                        <li><a href="{{ route('colchones') }}" >Colchones</a></li>
                        <li><a href="{{ route('muebles') }}" >Muebles</a></li>
                        <li><a href="{{ route('mas') }}" >Más</a></li>
                        <li><a href="#" class="scroll-link" data-id="contacto" >Contáctanos</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact" >Cómo llegar</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    

@yield('content')





                    

    


    


    <div id="contact" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>Contáctanos</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    
                    <div id="mapa" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.999235383046!2d-70.6468052848001!3d-33.475370680766865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5479048bacb%3A0xc5b924aa98d55f5a!2sPlacer+865%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1508118146217" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <h4 style="color: white;">
                        Dirección: Placer 865 Centro Comercial las gangas
                        <br>Local: Calle 13 Local 159 al 164
                        <br>Horario: Lunes a domingo de 10:00 a 19:00 hrs
                        </h4>
                    </div>
                </div>
                <div class="col-md-6" id="contacto">
                    
                    @if(session()->has('flash'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <strong>Mensaje enviado!</strong> Hemos recibido tu mensaje satisfactoriamente.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      {{ session()->get('flash') }}
                    </div>
                    
                    @endif
                    <div class="row">
                    
                      <form id="contact" action="{{ route('messages') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                          <fieldset>
                            <input name="nombre" type="text" class="form-control" id="name" placeholder="Tu nombre..." required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                            <input name="correo" type="email" class="form-control" id="email" placeholder="tu email..." required="">
                          </fieldset>
                        </div>

                        <div class="col-md-12">
                          <fieldset>
                            <textarea name="mensaje" rows="6" class="form-control" id="message" placeholder="Tu mensaje..." required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-md-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="btn">Enviar Mensaje</button>
                          </fieldset>
                        </div>
                      </form>
                    </div>

                </div>
            </div>

<div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        
                        <h4>Contacto directo</h4>
                        <div class="line-dec">
                        </div>
                        <h4>Teléfono Fijo: 225514519</h4>
                        <h4>Celular: +56976285473</h4>
                        <h4>Mail: muebles.veliz86@gmail.com</h4>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>Derechos &copy; 2018 Muebles Veliz 
                        
                        - Diseño: <a href="http://www.tooplate.com" target="_parent">Tooplate</a>
                        - Imagenes: <a href="https://unsplash.com" target="_parent">Unsplash</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>