@extends('template.app')

@section('content')

    <!-- slider-area -->
    <section id="home" class="slider-area fix p-relative">
               
        <div class="slider-active" style="background: #141b22;">

            @foreach( $carouselImages as $key => $slider )

                <div class="single-slider slider-bg" style="background-image: url({{ $slider->image_url }}); background-size: cover;">
                <div class="container">
                   <div class="row">
                      
                        <div class="col-lg-7 col-md-7">
                            <div class="slider-content s-slider-content mt-130">
                                 <h5 data-animation="fadeInUp" data-delay=".4s">Bienvenido a {{ ___getSite()->dataSchool->name }}</h5>
                                 <h2 data-animation="fadeInUp" data-delay=".4s">{{ $slider->title }}</h2>
                                <p data-animation="fadeInUp" data-delay=".6s">{{ $slider->description }}</p>
                                
                                  <div class="slider-btn mt-30">     
                                    <a href="#" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s">Descubre más <i class="fal fa-long-arrow-right"></i></a>
                                    <a href="#" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".4s">Contáctanos <i class="fal fa-long-arrow-right"></i></a>
                                </div>        
                                                      
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 p-relative">
                        </div>
                        
                    </div>
                </div>
                </div>

            @endforeach

        </div>
            
    </section>
    <!-- slider-area-end -->
     <!-- service-area -->
    {{--<section class="service-details-two p-relative">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07">
                        
                     <div class="sr-contner">
                        <div class="icon">
                        <img src="{{ asset('templates/template-one/img/icon/sve-icon4.png') }}" alt="icon01">
                        </div>
                        <div class="text">
                            <h5><a href="#">Servicios Educativos</a></h5>
                            <p>Visualice sin problemas el capital electual de calidad sin colaboración superior e intercambio de ideas de forma lista.</p>
                            <a href="#">Leer más <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                     </div>
                        
                        
                    </div>
                </div>
                 <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07 active">
                        <div class="sr-contner">
                        <div class="icon">
                        <img src="{{ asset('templates/template-one/img/icon/sve-icon5.png') }}" alt="icon01">
                        </div>
                        <div class="text">
                            <h5><a href="#">Centros internacionales</a></h5>
                            <p>Visualice sin problemas el capital electual de calidad sin colaboración superior e intercambio de ideas de forma lista.</p>
                            <a href="#">Leer más <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                     </div>
                       
                    </div>
                </div>
                
             <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07">
                        <div class="sr-contner">
                        <div class="icon">
                        <img src="{{ asset('templates/template-one/img/icon/sve-icon6.png') }}" alt="icon01">
                        </div>
                        <div class="text">
                            <h5><a href="#">Licenciatura y Maestría</a></h5>
                            <p>Visualice sin problemas el capital electual de calidad sin colaboración superior e intercambio de ideas de forma lista.</p>
                            <a href="#">Leer más <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                     </div>
                        
                    </div>
                </div>
             
            </div>
        </div>
    </section>--}}
    <!-- service-details2-area-end -->
    
     <!-- about-area -->
    <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;" id="knowUs">
        <div class="animations-02"><img src="{{ asset('templates/template-one/img/bg/an-img-02.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ ___getSite()->dataSchool->image_about_us_url ?? asset('templates/template-one/img/features/about_img_02.png') }}" alt="img">   
                       <div class="about-text second-about">
                            <span>25 <sub>+</sub></span> 
                            <p>Años de Experiencia</p>
                        </div>
                    </div>
                  
                </div>
                
            <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">  
                            <h5><i class="fal fa-graduation-cap"></i> Sobre Nuestra Universidad</h5>
                            <h2>{{ ___getSite()->dataSchool->title_about_us }}</h2>                                   
                        </div>
                        <p class="txt-clr">{{ ___getSite()->dataSchool->description_about_us }}</p>
                        {{--<div class="about-content2">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="green2">                                              
                                            <li><div class="abcontent"><div class="ano"><span>01</span></div> <div class="text"><h3>Doctorados</h3> <p>el plan de nuestros postgrados, son de alta calidad</p></div></div></li>
                                            <li><div class="abcontent"><div class="ano"><span>02</span></div> <div class="text"><h3>Estudiantes</h3> <p>el plan de nuestros postgrados, son de alta calidad</p></div></div></li>
                                            
                                    </ul>
                                </div>
                            </div>
                        </div>--}}
                         {{--<div class="slider-btn mt-20">                                          
                             <a href="#" class="btn ss-btn smoth-scroll">Leer más <i class="fal fa-long-arrow-right"></i></a>				
                        </div>--}}
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- about-area-end -->
     <!-- courses-area -->
    <section class="courses pt-120 pb-120 p-relative fix" id="programs">
         <div class="animations-01"><img src="{{ asset('templates/template-one/img/bg/an-img-03.png') }}" alt="an-img-01"></div>
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 p-relative">
                   <div class="section-title center-align mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Nuestros cursos</h5>
                        <h2>
                          Programas
                        </h2>                             
                    </div>
                </div>
            </div>
            <div class="row class-active">  
                
                @foreach ( $programs as $pro => $program )

                    <div class="col-lg-4 col-md-6">
                        <div class="courses-item mb-30 hover-zoomin">
                            <div class="thumb fix">
                                <a href="{{ route('program-show', [ 'slug' => $program->slug ]) }}"><img src="{{ $program->image_url }}" alt="contact-bg-an-01" style="height: 217px !important; width: 385px !important"></a>
                            </div>
                            <div class="courses-content">                                    
                                <div class="cat"><i class="fal fa-graduation-cap"></i> {{ $program->area }} </div>
                                <h3><a href="{{ route('program-show', [ 'slug' => $program->slug ]) }}"> {{ $program->name }} </a></h3>
                                <p>{{ $program->description }}</p>
                                <a href="{{ route('program-show', [ 'slug' => $program->slug ]) }}" class="readmore">Leer más <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                            <div class="icon">
                            <img src="{{ asset('templates/template-one/img/icon/cou-icon.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                    
                @endforeach

            </div>
            
        </div>
    </section>
    <!-- courses-area -->
    <!-- steps-area -->
    <section class="steps-area p-relative"  style="background-color: var( --secondary-color );">
        <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-10.png') }}" alt="an-img-01"></div>
        <div class="container">
  
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="section-title mb-35 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>Marcando la diferencia</h2>
                        <p>A menudo se nuestros evento, son de gala, con resitales de música y poesía</p>
                    </div>
                    <ul class="pr-20">
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon01.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Maestros calificados</h3>
                                    <p>A menudo se nuestros evento, son de gala, con resitales de música y poesía</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                     <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon02.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Cursos asequibles</h3>
                                    <p>A menudo se nuestros evento, son de gala, con resitales de música y poesía</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                   <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon03.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Eficiente y Flexible</h3>
                                    <p>A menudo se nuestros evento, son de gala, con resitales de música y poesía</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="step-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="https://ipes2.s3.us-east-2.amazonaws.com/641494ce90083-steps-img.png" alt="class image">
                    </div>
                   
                </div>
                
               
                
            </div>
            
        </div>
    </section>
    <!-- steps-area-end -->
     <!-- event-area -->
    <section class="event pt-120 pb-90 p-relative fix" id="events">
         <div class="animations-06"><img src="{{ asset('templates/template-one/img/bg/an-img-06.png') }}" alt="an-img-01"></div>
        <div class="animations-07"><img src="{{ asset('templates/template-one/img/bg/an-img-07.png') }}" alt="contact-bg-an-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-08.png') }}" alt="contact-bg-an-01"></div>
        <div class="animations-09"><img src="{{ asset('templates/template-one/img/bg/an-img-09.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 p-relative">
                   <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Nuestros eventos</h5>
                        <h2>
                          Próximos eventos
                        </h2>
                     
                    </div>
                </div>                        
                 
            </div>
            <div class="row" id="upcomingEvents">
             
                {{--# Información traida por ajax #--}}

            </div>
            
             
        </div>
    </section>
   <!-- courses-area -->
    <!-- cta-area -->
    <section class="cta-area cta-bg pt-50 pb-50" style="background-image:url('https://ipes2.s3.us-east-2.amazonaws.com/641492fb8e710-cta_bg02.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>Programas de Becas</h2>
                        <p>En {{ ___getSite()->dataSchool->name }}, lo preparamos para iniciar su carrera al proporcionar un entorno de apoyo, creativo y profesional desde el cual aprender habilidades prácticas y construir una red de contactos en la industria.</p>
                    </div>
                                     
                </div>
                <div class="col-lg-4 text-right"> 
                    <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                        {{--<a href="#" class="btn ss-btn smoth-scroll">Ayuda financiera <i class="fal fa-long-arrow-right"></i></a>--}}			
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- cta-area-end -->	
    <!-- frequently-area -->
    <section class="faq-area pt-120 pb-120 p-relative fix" id="contact">
        <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="an-img-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-05.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center  align-items-center">
               
                <div class="col-lg-7">
                    <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>Obtén todas las respuestas aquí.</h2>
                        <p>Una empresa u organización establecida para proporcionar un servicio en particular, generalmente uno que implica la organización de transacciones.</p>
                    </div>
                       <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="accordion" id="accordionExample">

                            @foreach ( $faq_questions as $faq => $faq_question )

                                <div class="card">
                                    <div class="card-header" id="heading{{ $faq }}">
                                        <h2 class="mb-0">
                                            <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $faq }}">
                                                0{{ $faq + 1 }} {{ $faq_question->question }}
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse{{ $faq }}" class="collapse" 
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            {{ $faq_question->answer }}
                                        </div>
                                    </div>
                                </div>
                                
                            @endforeach

                        </div>
                    </div>               
                </div>

                <div class="col-lg-5">

                    <div class="contact-bg02">

                        <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                            
                            <h2>Contactar</h2>
                        
                        </div>
                            
                        <form id="senderMessage" action="#" method="post" class="contact-form mt-30 wow fadeInUp animated contactFormSender" data-animation="fadeInUp" data-delay=".4s">

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-name mb-20">                                    
                                        <input type="text" id="formName" name="formName" placeholder="Nombres">
                                        <span class="text-white" id="formNameMessage" hidden><strong>Campo requerido</strong></span>                            
                                    </div>   
                                </div>
                                
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-20">                                   
                                        <input type="text" id="formEmail" name="formEmail" placeholder="Correo">
                                        <span class="text-white" id="formEmailMessage" hidden><strong>Correo requerido</strong></span>                            
                                    </div>
                                </div>	

                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-20">                                   
                                        <input type="text" id="formPhone" name="formPhone" placeholder="Telefono">
                                        <span class="text-white" id="formPhoneMessage" hidden><strong>Campo requerido</strong></span>
                                    </div>
                                </div>	
                            
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">                                  
                                        <textarea name="formMessage" id="formMessage" cols="30" rows="10" placeholder="Comentarios"></textarea>
                                    </div>
                                    <div class="slider-btn">                                          
                                        <button onclick="senderEmail()" class="btn ss-btn" type="button" data-animation="fadeInRight" data-delay=".8s"><span>Enviar</span> <i class="fal fa-long-arrow-right"></i></button>				
                                    </div>                             
                                </div>

                                <div class="col-lg-12 text-center mt-4" id="statusProcessSender">

                                </div>

                            </div>
                            
                        </form>
                    
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- frequently-area-end -->	
    <!-- video-area -->
    <section class="cta-area cta-bg pt-160 pb-160" style="background-image:url('https://ipes2.s3.us-east-2.amazonaws.com/641493ec46a27-cta_bg.png')">
        <div class="container">
            <div class="row justify-content-center  align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="section-title cta-title video-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2> Que hace <span>{{ ___getSite()->dataSchool->name }}</span> Diferente</h2>
                        <p>Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre</p>	
                    </div>
                                     
                </div>
                <div class="col-lg-2 col-md-2">
                </div>
               <div class="col-lg-4">

                        <div class="s-video-content">

                            <a href="https://www.youtube.com/watch?v=wfRwYN3BhJ0&list=TLGGyTpTH5ac8HUxMTAzMjAyMw&t=3s" class="popup-video mb-50"><img src="{{ asset('templates/template-one/img/bg/play-button.png') }}" alt="circle_right"></a>
                           
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-area-end -->	
    <!-- testimonial-area -->
    <section class="testimonial-area pt-120 pb-115 p-relative fix">
         <div class="animations-01"><img src="{{ asset('templates/template-one/img/bg/an-img-03.png') }}" alt="an-img-01"></div>
        <div class="animations-02"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Testimonios</h5>
                        <h2>
                            Lo que dicen nuestros clientes
                        </h2>
                     
                    </div>
                   
                </div>
                
                <div class="col-lg-12">
                    <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Haber estudia en ICI fué mi mejor opción para mis estudios, gracias a su plan me encuentro en un puesto estratégico dentro de la empresa.</p>
                            <div class="testi-author">
                                <img src="{{ asset('templates/template-one/img/testimonial/testi_avatar.png') }}" alt="img">
                            </div>
                            <div class="ta-info">
                                    <h6>Margie Dose</h6>
                                    <span>Web Developer</span>
                                </div>                                    
                        </div>
                        <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Haber estudia en ICI fué mi mejor opción para mis estudios, gracias a su plan me encuentro en un puesto estratégico dentro de la empresa.</p>
                            <div class="testi-author">
                                <img src="{{ asset('templates/template-one/img/testimonial/testi_avatar_02.png') }}" alt="img">
                            </div>
                            <div class="ta-info">
                                    <h6>Rock Dloder</h6>
                                    <span>Web Developer</span>
                                </div>                                    
                        </div>
                      <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Haber estudia en ICI fué mi mejor opción para mis estudios, gracias a su plan me encuentro en un puesto estratégico dentro de la empresa.</p>
                            <div class="testi-author">
                                <img src="{{ asset('templates/template-one/img/testimonial/testi_avatar_03.png') }}" alt="img">
                            </div>
                            <div class="ta-info">
                                    <h6>Roboto Eorure</h6>
                                    <span>Web Developer</span>
                                </div>                                    
                        </div>
                        <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Haber estudia en ICI fué mi mejor opción para mis estudios, gracias a su plan me encuentro en un puesto estratégico dentro de la empresa.</p>
                            <div class="testi-author">
                                <img src="{{ asset('templates/template-one/img/testimonial/testi_avatar.png') }}" alt="img">
                            </div>
                            <div class="ta-info">
                                    <h6>Margie Dose</h6>
                                    <span>Web Developer</span>
                                </div>                                    
                        </div>
                       <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Haber estudia en ICI fué mi mejor opción para mis estudios, gracias a su plan me encuentro en un puesto estratégico dentro de la empresa.</p>
                            <div class="testi-author">
                                <img src="{{ asset('templates/template-one/img/testimonial/testi_avatar_02.png') }}" alt="img">
                            </div>
                            <div class="ta-info">
                                    <h6>Rock Dloder</h6>
                                    <span>Web Developer</span>
                                </div>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- search-area -->
    <section class="search-area pt-120 pb-120 p-relative fix" style="background-image:url('https://ipes2.s3.us-east-2.amazonaws.com/641496b606c71-search_bg.png');  background-position: center center; background-repeat: no-repeat; background-size: cover;">
        <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="an-img-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-05.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center  align-items-center">
                <div class="col-lg-8">
                    <div class="contact-bg">
                    <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>
                            Buscar cursos
                        </h2>
                        <p>Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre se une con universidades de primer nivel, estamos haciendo que el aprendizaje sea más relevante y transformador.</p>
                    </div>
                        
                <form action="mail.php" method="post" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-field p-relative c-name mb-20">                                    
                            <input type="text" id="firstn2" name="firstn" placeholder="Nombres" required>
                        </div>                               
                    </div>
                    
                    <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-subject mb-20">                                   
                            <input type="text" id="email3" name="email" placeholder="Correo" required>
                        </div>
                    </div>		
                    <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-option mb-20">                                   
                            <select name="instructor" id="instructor">
                            <option value="instructore">Instructor</option>
                            <option value="hot-stone-message">Mensahje</option>
                            <option value="facil-therophy">Información</option>
                            </select>
                        </div>
                    </div>	
                        <div class="col-lg-6">
                            <div class="contact-field p-relative c-option mb-20">                                   
                                <select name="department" id="department">
                                <option value="department">Departmento</option>
                                <option value="hot-stone-message">Mensahje</option>
                                <option value="facil-therophy">Información</option>
                                </select>
                            </div>
                        </div>
                <div class="col-lg-6">                               
                        <div class="contact-field p-relative c-option mb-20">                                   
                                <select name="campus" id="campus">
                                <option value="campus">Campus</option>
                                <option value="hot-stone-message">Mensahje</option>
                                <option value="facil-therophy">Información</option>
                                </select>
                            </div>
                    </div>	
                        <div class="col-lg-6">
                        <div class="contact-field p-relative c-option mb-20">                                   
                                <select name="level" id="level">
                                <option value="level">Nivel</option>
                                <option value="hot-stone-message">Mensahje</option>
                                <option value="facil-therophy">Información</option>
                                </select>
                            </div>
                        </div>
                    <div class="col-lg-12">
                        
                        <div class="slider-btn">                                          
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Buscar cursos <i class="fal fa-long-arrow-right"></i></button>				
                                </div>                             
                    </div>
                    </div>
                
            </form>
                    
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    <!-- search-area-end -->	
    <!-- admission-area -->
    <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background-image:url({{ asset('templates/template-one/img/bg/admission_bg.png') }}); background-repeat: no-repeat; background-position: top;">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="https://ipes2.s3.us-east-2.amazonaws.com/6414954a7a75c-about_img.png" alt="img">                              
                    </div>                          
                </div>
                
            <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">  
                            <h2>Admisión y ayuda</h2>                                   
                        </div>
                        <p class="txt-clr">Nuestra comunidad está siendo llamada a reimaginar el futuro. Como la única universidad donde una escuela de diseño de renombre se une con universidades de primer nivel, estamos haciendo que el aprendizaje sea más relevante y transformador.</p>
                        <p class="txt-clr">En la Universidad de Estuidar, lo preparamos para iniciar su carrera en un entorno profesional, creativo y de apoyo desde el cual aprender habilidades prácticas y construir una red de contactos en la industria.</p>
                        <div class="slider-btn mt-20">                                          
                            {{--<a href="#" class="btn ss-btn smoth-scroll">Leer más <i class="fal fa-long-arrow-right"></i></a>--}}				
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- admission-area-end -->
    <!-- brand-area -->
    <div class="brand-area pt-60 pb-60" style="background-color: var( --primary-color )">
        <div class="container">
            
            <div class="row brand-active">
            
                @foreach ( $certifications as $cer => $certification )

                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="{{ $certification->image_url }}" alt="img">
                        </div>
                    </div>
                    
                @endforeach

            </div>

        </div>
    </div>
    <!-- brand-area-end -->        
    <!-- blog-area -->
    <section {{--id="blog"--}} class="blog-area p-relative fix pt-120 pb-90" style="background-image:url({{ asset('templates/template-one/img/bg/blog_bg.png') }}); background-repeat: no-repeat; background-position: top;" id="posts">
        <div class="container">
            <div class="row align-items-center"> 
                <div class="col-lg-12">
                    <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><i class="fal fa-graduation-cap"></i> Nuestro Posts</h5>
                        <h2>
                            Posts y noticias más recientes
                        </h2>
                    
                    </div>
                
                </div>
            </div>
            <div class="row">

                @foreach ( $posts as $pot => $post )
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="{{ route('post-show', ['slug' => $post->slug] ) }}"><img src="{{ $post->image_feature_url }}" alt="img"></a>
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::createFromDate($post->created_at)->isoFormat('DD') }} de {{ \Carbon\Carbon::createFromDate($post->created_at)->isoFormat('MMMM') }}, {{ \Carbon\Carbon::createFromDate($post->created_at)->isoFormat('YYYY') }}
                                </div>
                            </div>                    
                            <div class="blog-content2">    
                            <div class="b-meta">
                                    <div class="meta-info">
                                        <ul>
                                            <li><i class="fal fa-user"></i> By Admin </li>
                                            {{--<li><i class="fal fa-comments"></i> 3 Comments</li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <h4><a href="{{ route('post-show', ['slug' => $post->slug] ) }}">{{ $post->title }}</a></h4> 
                                <p>{{ $post->subtitle }}</p>
                                <div class="blog-btn"><a href="{{ route('post-show', ['slug' => $post->slug] ) }}">Leer más <i class="fal fa-long-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- newslater-area -->
    <section class="newslater-area pt-60 pb-60" style="background-color: var( --secondary-color )">
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title newslater-title">
                        <div class="icon">
                            <img src="{{ asset('templates/template-one/img/icon/send-mail.png') }}" alt="img">
                        </div>
                        <div class="text">
                            <h2>Suscribete</h2>
                            <p>Nuevas noticias cada semana</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                    <div class="form-group p-relative">
                        <input class="form-control" id="email2" name="email" type="email" placeholder="Correo..." value="" required=""> 
                        <button type="submit" class="btn btn-custom" id="send2">Suscribirme ahora</button>
                    </div>
                    <!-- /Form-email -->	
                    </form>
                </div>
            </div>
        
        </div>
    </section>
    <!-- newslater-aread-end -->

@endsection

@section('scripts')

<script src="{{ asset('scripts/sites/index.blade.js') }}"></script>

<script>

    let url_get_data_notices = '{{ route("site-get-notices") }}';

    let date                 = moment().format('YYYY-MM-DD');
    
    onLoadPage( url_get_data_notices, date );

    /*const getNoticesDate = () => {
        
        let selectedDate = $('#noticesDate').val();
       
        cargaAutomatica( url_get_data_notices, selectedDate );

    }*/

    const senderEmail = () => {
            
            let url_sender = '{{ route("site-process-contact") }}';

            let name       = $('#formName').val();

            let email      = $('#formEmail').val();

            let phone      = $('#formPhone').val();

            let message    = $('#formMessage').val();

            let pattern    = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i;

            if ( name == '' ) {

                $('#formName').css('border-color', 'red');

                $('#formNameMessage').removeAttr("hidden");

                $('#formNameMessage').show();

                return true;

            } else {

                $('#formName').removeAttr("style");

                $('#formNameMessage').hide();

            }

            if ( email == '' | pattern.test( $('#formEmail').val() ) === false ) {

                $('#formEmail').css('border-color', 'red');

                $('#formEmailMessage').removeAttr("hidden");

                $('#formEmailMessage').show();

                return true;

            } else {

                $('#formEmail').removeAttr("style");

                $('#formEmailMessage').hide();

            }

            if ( phone == '' ) {

                $('#formPhone').css('border-color', 'red');

                $('#formPhoneMessage').removeAttr("hidden");

                $('#formPhoneMessage').show();

                return true;

            } else {

                $('#formPhone').removeAttr("style");

                $('#formPhoneMessage').hide();

            }

            $.ajax({

            url      : url_sender,
            headers  : { 'X-CSRF-TOKEN': $('meta[name="csrf-token_UWl0eGVuTg=="]').attr('content') },
            method   : 'POST',
            data     : { 
                'name'    : name, 
                'email'   : email,
                'phone'   : phone,
                'message' : message
            },
            dataType : 'json',
            success  : function( response ) {
                
                $('#formName').val('');

                $('#formEmail').val('');

                $('#formPhone').val('');

                $('#formMessage').val('');

                if (parseInt(response, 0) !== 0) { 

                    let messageResponse = response.split('|');

                    if (messageResponse[0] === 'success') { 
                        
                        $('#statusProcessSender').html(`<strong><h6> ${ messageResponse[1] } </h6></li></strong>`);

                    } else {

                        $('#statusProcessSender').html(`<strong><h6> Error! ( ${ messageResponse[1] } )</h6></li></strong>`);

                    }

                }

                console.log(response);

            }, error : function() {

                    console.log("existió un problema");

                }
            });

        }
        
</script>

@endsection