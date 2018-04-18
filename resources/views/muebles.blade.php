@extends('layout')

@section('content')
<div id="what-we-do" class="mueble">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-text">
                        <h4>Muebles Véliz<br> Muebles a Medida.</h4>
                        <p>Diseñamos y fabricamos los mejores muebles a medida.
                            <br>
                            <br>
                        
                        -Muebles de Cocina.
                        <br>
                        -Closet.
                        <br>
                        -Marquesas.
                        <br>
                        -Veladores.
                        </p>

                        <ul>
                            <li>
                                <div class="white-button">
                                    <a href="#" class="scroll-link" data-id="portfolio">Ver Muebles</a>
                                </div>
                            </li>
                            <li>
                                <div class="primary-button">
                                    <a href="#" class="scroll-link" data-id="contact">Comprar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="img/muebles-por.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="page-section">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Muebles a medida</h4>
                            <div class="line-dec"></div>
                        </div>
                    </div>
                </div>
                <div class="projects-holder-3">
                    <div class="filter-categories">
                        <ul class="project-filter">
                            <li class="filter" data-filter="all"><span>Todos</span></li>
                            <li class="filter" data-filter="Closet"><span>Closet</span></li>
                            <li class="filter" data-filter="Marquesas"><span>Marquesas</span></li>
                            <li class="filter" data-filter="Cocina"><span>Muebles de Cocina</span></li>
                            
                        </ul>
                    </div>
                    <div class="projects-holder">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 project-item mix Cocina">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_01.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_01.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Marquesas">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_10.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_10.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Marquesas">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_03.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_03.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Closet">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_04.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_04.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Cocina">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_05.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_05.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Cocina">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_06.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_06.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Cocina">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_07.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_07.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6 project-item mix Cocina">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="img/portfolio_08.jpg">
                                  </div>
                                  <div class="hover-effect">
                                    <a href="img/portfolio_big_08.jpg" data-lightbox="image-1"><i class="fa fa-search"></i></a>
                                  </div>
                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@stop