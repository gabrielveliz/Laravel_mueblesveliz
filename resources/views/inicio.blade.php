@extends('layout')

@section('content')
<section class="cd-hero">
        <ul class="cd-hero-slider autoplay">  
        <!-- 
            <ul class="cd-hero-slider autoplay"> for slider auto play 
            <ul class="cd-hero-slider"> for disabled auto play
        -->
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Muebles Véliz</span>
                        <h1>Muebles y Colchones Véliz</h1>
                        <h2>Colchones de espuma y resortes</h2>
                        <p>Encuentra los mejores colchones, revisa nuestro catalogo.</p>
                        <div class="primary-button">
                            <a href="{{ route('colchones') }}" >Ver mas...</a>
                        </div>                           
                    </div>                   
                </div> <!-- .cd-full-width -->
            </li>

            <li class="second-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Muebles Véliz</span>
                        <h1>Muebles y Colchones Véliz</h1>
                        <h2>Muebles a Medida</h2>
                        <p>Diseñamos y fabricamos muebles a medida, llama y cotiza nuestros valores.</p>
                        <div class="primary-button">
                            <a href="{{ route('muebles') }}">ver mas...</a>
                        </div>                        
                    </div>                     
                </div> <!-- .cd-full-width -->
            </li>

            <li class="third-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Muebles Véliz</span>
                        <h1>Muebles y Colchones Véliz</h1>
                        <h2>Artículos de dormitorio</h2>
                        <p>Encuentra los mejores artículos para tu dormitorio.</p>
                        <div class="primary-button">
                            <a href="{{ route('mas') }}">ver mas...</a>
                        </div>                           
                    </div>                         
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>
                
                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>                        
                </ul>
            </nav> 
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->

    <div id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        

                         <div class="row">
                           <div class="col-md-12 col-sm-12 col-xs-12"> 
                            <center>
                                <h1>Muebles Veliz</h1>
                                <h2>Tenemos una amplia variedad de colchones y muebles a medida.</h2>

                            </center>
                           </div>
                            
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                <a id="hrefa" href="{{ route('colchones') }}">
                                <div class="service-item second-service">

                                    <div class="icon"></div>
                                    <h4>Colchones</h4>
                                    <p>Encuentra los mejores colchones de espuma y Resortes.</p>
                                </div>
                            </a>
                            </div>
                             
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                <a id="hrefa" href="{{ route('muebles') }}">
                                <div class="service-item third-service">
                                    <div class="icon"></div>
                                    <h4>Muebles</h4>
                                    <p>Diseñamos y fabricamos los mejores muebles a medida.</p>
                                </div>
                            </a>
                            </div>
                             
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a id="hrefa" href="{{ route('mas') }}">
                                <div class="service-item fourth-service">
                                    <div class="icon"></div>
                                    <h4>Articulos de dormitorio</h4>
                                    <p>Encuentra los mejores articulos para tu dormitorio.</p>
                                </div>
                            </a>
                            </div>
                            

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
          





@stop