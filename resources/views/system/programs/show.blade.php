@extends('template.app')

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url({{ asset('templates/template-one/img/bg/bdrc-bg.png') }})">
              
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Detalles del Curso</h2>  
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">
                      
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalles del Curso</li>
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
            <!-- Lower Content -->
            <div class="lower-content">
                <div class="row">
                    <div class="text-column col-lg-9 col-md-9 col-sm-12">
                        <h2>El curso de analista de inteligencia de negocios</h2>
                        
                        <div class="upper-box">
                            <div class="single-item-carousel owl-carousel owl-theme">
                                <figure class="image"><img src="img/class/class-9.jpg" alt=""></figure>    
                            </div>
                        </div>
                        <div class="inner-column">
                            <div class="course-meta2 review style2 clearfix mb-30">
                            <ul class="left">
                                <li>
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="img/bg/testi_avatar.png" alt="image">
                                        </div>

                                        <div class="text">
                                            <a href="#">Robto Jone</a>
                                            <p>Profesor</p>
                                        </div>
                                    </div>                                    
                                </li>
                                <li class="categories">
                                    <div class="author">
                                    <div class="text">
                                        <a href="#" class="course-name">Photoshop</a>
                                        <p>Categoría</p>
                                    </div>
                                    </div>
                                
                                </li>
                            
                            </ul>
                                <ul class="right">
                                <li class="price">
                                    $59.00
                                </li>
                        
                            </ul>
                            </div>
                            <h3>Resumen del curso</h3>
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                        
                            <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32</p>
                            <h4>Lo que vas a aprender</h4>
                            <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
                            <p>Hay muchas variaciones de los pasajes de Lorem Ipsum disponibles, pero la mayoría sufrió alteraciones en alguna manera, ya sea porque se le agregó humor, o palabras aleatorias que no parecen ni un poco creíbles. Si vas a utilizar un pasaje de Lorem Ipsum, necesitás estar seguro de que no hay nada avergonzante escondido en el medio del texto. Todos los generadores de Lorem Ipsum que se encuentran en Internet tienden a repetir trozos predefinidos cuando sea necesario, haciendo a este el único generador verdadero (válido) en la Internet. Usa un diccionario de mas de 200 palabras provenientes del latín, combinadas con estructuras muy útiles de sentencias, para generar texto de Lorem Ipsum que parezca razonable. Este Lorem Ipsum generado siempre estará libre de repeticiones, humor agregado o palabras no características del lenguaje, etc.</p>
                            <ul class="pr-ul">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        Accesibilidad de rastreo para que los motores puedan leer su sitio web
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        Contenido digno de compartir que gana enlaces, citas
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        Palabra clave optimizada para atraer buscadores y motores
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        Título, URL y descripción para obtener un alto CTR
                                    </div>
                                </li>
                            
                            </ul>
                            <h4>Opciones de estudio:</h4>
                            <table class="table table-bordered mb-40">
                                <thead>
                                    <tr>
                                        <th>Cualificación</th>
                                        <th>Longitud</th>
                                        <th>Código</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Licenciatura (Hons)</td>
                                        <td>3 años tiempo completo</td>
                                        <td>CDX3</td>
                                    </tr>
                                    <tr>
                                        <td>Bsc </td>
                                        <td>4 años tiempo completo</td>
                                        <td>CDX4</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3>Preguntas frecuentes</h3>
                            <p>Una empresa u organización establecida para brindar un servicio en particular, generalmente uno que involucra transacciones de organización. Lorem ipsum es simplemente texto libre que se usa para copiar y actualizar. Neque porro est qui dolorem enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum es simplemente un texto ficticio de la imprenta..</p>
                        <div class="faq-wrap pt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree"  >
                                                01 Primera pregunta, primera ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre se une con universidades de primer nivel, estamos haciendo que el aprendizaje sea más relevante y transformador. Estamos enriquecidos por la amplia gama.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne"  >
                                                02 Segunda pregunta, segunda ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                                Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre se une con universidades de primer nivel, estamos haciendo que el aprendizaje sea más relevante y transformador. Estamos enriquecidos por la amplia gama.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo"  >
                                                03 Tercera pregunta, tercera ?
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                            <div class="card-body">
                                            Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre se une con universidades de primer nivel, estamos haciendo que el aprendizaje sea más relevante y transformador. Estamos enriquecidos por la amplia gama.
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <aside class="sidebar-widget info-column">
                            <div class="inner-column3">
                                    <h3>Características del curso</h3>
                                    <ul class="project-info clearfix">
                                        <li>
                                            <div class="priceing">                                    
                                            <strong>$59.00</strong> <sub>$139.00</sub>
                                            <span class="discont">68% Dscto.</span>
                                            </div>
                                        </li>
                                        <li>
                                        <span class="icon fal fa-home-lg-alt"></span> <strong>Instructor:</strong> <span>Eleanor Fant</span>
                                        </li>

                                        <li>
                                        <span class="icon fal fa-book"></span> <strong>Lecturas:</strong> <span>14</span>
                                        </li>

                                        <li>
                                            <span class="icon fal fa-clock"></span> <strong>Duración: </strong> <span>6 semanas</span>
                                        </li>
                                        <li>
                                            <span class="icon fal fa-user"></span> <strong>Inscritos: </strong> <span>20 estudiantes</span>
                                        </li>
                                        <li>
                                            <span class="icon fal fa-globe"></span> <strong>Lenguaje </strong> <span>Inglés</span>
                                        </li>
                                        <li>
                                            <div class="slider-btn">                                          
                                                <a href="#" class="btn ss-btn smoth-scroll">Inscribirse <i class="fal fa-long-arrow-right"></i></a>				
                                            </div>
                                        </li>
                                    
                                    </ul>
                                </div>
                    </aside>
                    
                    
                        
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