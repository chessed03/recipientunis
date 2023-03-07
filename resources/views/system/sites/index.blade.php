<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta keywords = "estructura básica, estructura general"/>
        <meta description = "Sitio con Estructura General"/>
        <meta name="csrf-token_UWl0eGVuTg==" content="{{ csrf_token() }}" />

        <title>Sitio en construcción</title>

        <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .1);
                border: solid rgba(0, 0, 0, .15);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 100vh;
            }

            .bi {
                vertical-align: -.125em;
                fill: currentColor;
            }

            .nav-scroller {
                position: relative;
                z-index: 2;
                height: 2.75rem;
                overflow-y: hidden;
            }

            .nav-scroller .nav {
                display: flex;
                flex-wrap: nowrap;
                padding-bottom: 1rem;
                margin-top: -1px;
                overflow-x: auto;
                text-align: center;
                white-space: nowrap;
                -webkit-overflow-scrolling: touch;
            }
        </style>


        <!-- Custom styles for this template -->
        <style>
            /* GLOBAL STYLES
-------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-top: 3rem;
                padding-bottom: 3rem;
                color: #5a5a5a;
            }


            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: 4rem;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
                bottom: 3rem;
                z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
                height: 32rem;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
                margin-bottom: 1.5rem;
                text-align: center;
            }
            /* rtl:begin:ignore */
            .marketing .col-lg-4 p {
                margin-right: .75rem;
                margin-left: .75rem;
            }
            /* rtl:end:ignore */


            /* Featurettes
            ------------------------- */

            .featurette-divider {
                margin: 5rem 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            /* rtl:begin:remove */
            .featurette-heading {
                letter-spacing: -.05rem;
            }

            /* rtl:end:remove */

            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 40em) {
                /* Bump up size of carousel content */
                .carousel-caption p {
                    margin-bottom: 1.25rem;
                    font-size: 1.25rem;
                    line-height: 1.4;
                }

                .featurette-heading {
                    font-size: 50px;
                }
            }

            @media (min-width: 62em) {
                .featurette-heading {
                    margin-top: 7rem;
                }
            }
        </style>

    </head>

    <body>

    <header>



        <nav class="navbar navbar-expand-md navbar-white bg-white py-3">
            <div class="container-fluid">

                <img src="https://icipuebla.com/wp-content/uploads/2020/05/ICI-logoo-min.png" class="shadow-1-strong rounded mb-4" alt="" width="180" height="62" title="ICI logoo-min">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    &nbsp;&nbsp;
                    <span class="navbar-nav me-auto mb-2 mb-md-0">admisiones@icipuebla.edu.mx</span>
                    <span class="navbar-nav me-auto mb-2 mb-md-0">+01 222 234 5464</span>
                    <div class="d-flex">
                        <a href="#" class="nav-link px-2 text-muted">Alumnos</a>
                        <a href="#" class="nav-link px-2 text-muted">Docentes</a>
                        <a href="#" class="nav-link px-2 text-muted">Calendario</a>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1c3550">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ICI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Oferta Académica</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Conócenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Revistas Científicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comunidad ICI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Somos ICI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('post-index') }}">Prueba Posts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach( $carouselImages as $key => $slider )
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}" class="{{ ( $key == 0 ) ? 'active' : '' }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach( $carouselImages as $key => $slider )
                    <div class="carousel-item {{ ( $key == 0 ) ? 'active' : '' }}">
                        <a href="{{ $slider->link_url }}">
                            <img src="{{ $slider->image_url ?? '#' }}" width="100%" height="100%" role="img" preserveAspectRatio="xMidYMid slice" alt="">
                        </a>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                @if( !is_null($slider->title) ) 
                                    <p><a class="btn btn-lg btn-primary" href="{{ $slider->link_url ?? '#' }}">Ver más</a></p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <div class="container">
                <div class="row">
                    <div class="col-4 text-center">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/04/TITULO3.png" alt="" width="350" height="7" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                    <div class="col-4">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/04/TITULO1.png" alt="" width="705" height="97" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                    <div class="col-4">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/04/TITULO2.png" alt="" width="705" height="97" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                    <div class="col-4">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/05/home-prepa-700x448.jpg" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                    <div class="col-4">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/05/home-ICI-700x448.jpg" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                    <div class="col-4">
                        <img src="https://icipuebla.com/wp-content/uploads/2020/05/home-ccjp-700x448.jpg" alt="" width="350" height="248" sizes="(max-width: 767px) 100vw, 33vw">
                    </div>
                </div>
            </div>

        </div><!-- /.container -->


        {{--@foreach( $notices as $not => $notice )
            
        {{ $notice->name }}
        {{ $notice->description }}
        {{ $notice->start_date }}
        {{ $notice->finish_date }}
        <br>
        @endforeach--}}

        <div class="row">

            <div  class="col-6">
                
                <h1>Avisos</h1>

                <div class="table-responsive">
                    <table class="table table-hover tabla_carga_automatica" id="tabla_carga_automatica">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Aviso</th>
                            <th class="text-center">Fecha</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-6">

                <h1>Calendario</h1>

            </div>

        </div>

    </main>

    <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('scripts/sites/index.blade.js') }}"></script>

    <script>

        let url_get_data_notices = '{{ route("site-getDataNotices") }}';
    
        cargaAutomatica( url_get_data_notices );

        
    </script>

    </body>

</html>
