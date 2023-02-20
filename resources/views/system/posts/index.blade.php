<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta keywords = "estructura básica, estructura general"/>
    <meta description = "Sitio con Estructura General"/>

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

    {{--        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 mx-lg-5">--}}
    {{--            <img src="https://icipuebla.com/wp-content/uploads/2020/05/ICI-logoo-min.png" class="shadow-1-strong rounded mb-4" alt="" width="204" height="82" title="ICI logoo-min">--}}

    {{--            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">--}}
    {{--            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>admisiones@icipuebla.edu.mx +01 222 234 5464--}}
    {{--            </a>--}}

    {{--            <ul class="nav col-md-4 justify-content-end">--}}
    {{--            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Alumnos</a></li>--}}
    {{--            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Docentes</a></li>--}}
    {{--            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Calendario</a></li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}

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

    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="container marketing">

        @foreach( $posts as $key => $post)

            <div class="row featurette">
                <div class="col-md-7 {{ ( ($key % 2) == 0 ) ? 'order-md-2' : '' }}">
                    <h2 class="featurette-heading fw-normal lh-1"> {{ $post->title }}</h2>
                    <p class="lead">{{ $post->subtitle }}</p>
                    <a href="{{ route('post-show', [ 'slug' => $post->slug ]) }}">ver más</a>
                </div>
                <div class="col-md-5 {{ ( ($key % 2) == 0 ) ? 'order-md-1' : '' }}">
                    {{--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto bg-image" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>--}}
                    <img src="{{ $post->image_feature_url }}" width="500" height="500" role="img" preserveAspectRatio="xMidYMid slice" alt="">
                </div>
            </div>

        @endforeach

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</main>


<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>


</body>

</html>

