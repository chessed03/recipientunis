@extends('template.app')

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url({{ asset('templates/template-one/img/bg/bdrc-bg.png') }})">
                
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Detalles del evento</h2>    
                            
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">
                    
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalles del evento</li>
                            </ol>
                        </nav>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->            
    <!-- Project Detail -->
    <section class="project-detail">
        <div class="container">
            <!-- Upper Box -->
            <div class="upper-box">
                <div class="single-item-carousel owl-carousel owl-theme">
                    <figure class="image"><img src="{{ $event->image_url }}" alt=""></figure>                    
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content2">
                <div class="row">
                    <div class="text-column col-lg-9 col-md-12 col-sm-12">
                        <div class="s-about-content wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">  
                        <h2>{{ $event->name }}</h2>
                        <p>El mundo de la optimizaci??n de motores de b??squeda es complejo y est?? en constante cambio, pero puede comprender f??cilmente los conceptos b??sicos, e incluso una peque??a cantidad de conocimiento de SEO puede marcar una gran diferencia. La educaci??n SEO gratuita tambi??n est?? ampliamente disponible en la web, ??incluso en gu??as como esta! (??Woohoo!) Esta gu??a est?? dise??ada para describir todos los aspectos principales de SEO, desde encontrar los t??rminos y frases (palabras clave) que pueden generar tr??fico calificado a su sitio web, hasta hacer que su sitio sea amigable para los motores de b??squeda, construir enlaces y comercializar lo ??nico. valor de su sitio. Etiam pharetra erat sed fermentum feugiat velit mauris egestas quam ut erat justo.</p>
                            <div countdown class="conterdown wow fadeInDown animated" data-animation="fadeInDown animated" data-delay=".2s" data-date="Jan 1 2024 00:00:00">
                                <div class="timer">										 
                                    <div class="timer-outer bdr1">												
                                    <span class="days" data-days>0</span> 
                                    <div class="smalltext">Dias</div>
                                    <div class="value-bar"></div>
                                    </div>
                                    <div class="timer-outer bdr2">
                                    <span class="hours" data-hours>0</span> 
                                    <div class="smalltext">Horas</div>
                                    </div>
                                    <div class="timer-outer bdr3">
                                    <span class="minutes" data-minutes>0</span> 
                                    <div class="smalltext">Minutos</div>
                                    </div>
                                    <div class="timer-outer bdr4">
                                    <span class="seconds" data-seconds>0</span> 
                                    <div class="smalltext">Segundos</div>
                                    </div>
                                    <p id="time-up"></p>
                                </div>
                            </div>
                            <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayor??a sufri?? alteraciones en alguna manera, ya sea porque se le agreg?? humor, o palabras aleatorias que no parecen ni un poco cre??bles. Si vas a utilizar un pasaje de Lorem Ipsum, necesit??s estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el ??nico generador verdadero (v??lido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del lat??n, combinadas con estructuras muy ??tiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estar?? libre de repeticiones, humor agregado o palabras no caracter??sticas del lenguaje, etc.</p>
                            <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl??sica de la literatura del Latin, que data del a??o 45 antes de Cristo, haciendo que este adquiera mas de 2000 a??os de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontr?? una de las palabras m??s oscuras de la lengua del lat??n, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del lat??n, descubri?? la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el a??o 45 antes de Cristo. Este libro es un tratado de teor??a de ??ticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la secci??n 1.10.32</p>
                                <div class="two-column mt-30">
                                    <div class="row aling-items-center">
                                        <div class="image-column col-xl-6 col-lg-12 col-md-12">
                                            <div class="footer-social mt-10">                                    
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </div>
                                        </div>
                                        <div class="text-column col-xl-6 col-lg-12 col-md-12 text-right">
                                        
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="info-column col-lg-3 col-md-12 col-sm-12">
                        <div class="inner-column2">
                            <h3>Detalles del evento</h3>
                            <ul class="project-info clearfix">
                                <li>
                                    <span class="icon fal fa-clock"></span>
                                    <strong>4:00 pm - 6:00 pm</strong>
                                </li>

                                <li>
                                    <span class="icon fal fa-calendar-alt"></span>
                                    <strong>13 Marzo, 2023</strong>
                                </li>

                                <li>
                                    <span class="icon fal fa-map-marker-check"></span>
                                    <strong>12/A, NewYork Sydney City</strong>
                                </li>

                                <li>
                                    <span class="icon fal fa-envelope"></span>
                                    <strong>yourmail@gmail.com</strong>
                                </li>

                                <li>
                                    <span class="icon fal fa-phone"></span>
                                    <strong>+91 705 2101 786</strong>
                                </li>
                                <li>
                                    <div class="slider-btn">                                          
                                        <a href="#" class="btn ss-btn smoth-scroll">Reservar un asiento <i class="fal fa-long-arrow-right"></i></a>				
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Project Detail -->

    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color: var( --secondary-color )">
        <div class="container">
            <div class="row brand-active">
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="img/brand/b-logo1.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="img/brand/b-logo2.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="img/brand/b-logo3.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="img/brand/b-logo4.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="single-brand">
                        <img src="img/brand/b-logo5.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->   

@endsection