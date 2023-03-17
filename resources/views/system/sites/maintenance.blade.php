<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="csrf-token_UWl0eGVuTg==" content="{{ csrf_token() }}" />
        <title>{{ ___getSite()->dataSchool->name }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ ___getSite()->favicon_url }}">
        <!-- Place favicon.ico in the root directory -->

        @include('template.head-libraries')
		
    </head>
    <body>

    <!-- header -->
    <header class="header-area header-three">  
        <div class="header-top second-header d-none d-md-block">
             <div class="container">

                 <div class="row align-items-center">      
                    
                     <div class="col-lg-4 col-md-4 d-none d-lg-block ">
                        <div class="header-social">
                            <span>
                                <strong>Siguenos:</strong>
                                <a href="{{ ___getSite()->dataSchool->facebook ?? '#' }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ ___getSite()->dataSchool->instagram  ?? '#' }}" target="_blank" title="Intagram"><i class="fab fa-instagram"></i></a>               
                                <a href="{{ ___getSite()->dataSchool->twitter  ?? '#' }}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="{{ ___getSite()->dataSchool->youtube  ?? '#' }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
                            </span>                    
                            <!--  /social media icon redux -->                               
                         </div>
                     </div>
                       <div class="col-lg-8 col-md-8 d-none d-lg-block text-right">
                           <div class="header-cta">
                             <ul>
                                <li>
                                   <div class="call-box">
                                      <div class="icon">
                                         <img src="{{ asset('templates/template-one/img/icon/phone-call.png') }}" alt="img">
                                      </div>
                                      <div class="text">
                                         <span>Teléfono</span>
                                         <strong><a href="tel:+917052101786">{{ ___getSite()->dataSchool->phone_main }}</a></strong>                                              
                                      </div>
                                   </div>
                                </li>
                                <li>
                                   <div class="call-box">
                                      <div class="icon">
                                         <img src="{{ asset('templates/template-one/img/icon/mailing.png') }}" alt="img">
                                      </div>
                                      <div class="text">
                                         <span>Correo</span>
                                         <strong><a href="mailto:{{ ___getSite()->dataSchool->email_main }}">{{ ___getSite()->dataSchool->email_main }}</a></strong>                                               
                                      </div>
                                   </div>
                                </li>                                 
                             </ul>
                          </div>                        
                     </div>
                     
                 </div>
             </div>
         </div>		
    </header>
     <!-- header-end -->

         <!-- frequently-area -->
    <section class="faq-area pt-120 pb-120 p-relative fix">
        <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="an-img-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-05.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <a href="{{ ___getSite()->dataSchool->platform_students_url ?? '#' }}">
                        <h2>Plataforma Alumnos</h2>
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <a href="{{ ___getSite()->dataSchool->platform_teachers_url ?? '#' }}">
                        <h2>Plataforma Docentes</h2>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center  align-items-center">
               
                <div class="col-lg-7">

                    <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>SITIO EN MANTENIMIENTO</h2>
                        <p>Regresamos pronto</p>
                    </div>

                    <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <img src="{{ ___getSite()->dataSchool->logo_url }}" alt="img">
                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="contact-bg02">

                        <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                            <h2>Contactar</h2>
                        </div>
                        

                        <div  class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">

                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-name mb-20">                                    
                                        <input type="text" id="name" name="name" placeholder="Nombres" required>
                                    </div>                               
                                </div>
                                
                                <div class="col-lg-12">

                                    <div class="contact-field p-relative c-subject mb-20">                                   
                                        <input type="text" id="email" name="email" placeholder="Correo" required>
                                    </div>

                                </div>		
                                                
                                <div class="col-lg-12">

                                    <div class="contact-field p-relative c-message mb-30">                                  
                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comentarios"></textarea>
                                    </div>

                                    <div class="slider-btn mt-4">                                          
                                        <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s" onclick="sendSurface()"><span>Enviar</span> <i class="fal fa-long-arrow-right"></i></button>				
                                    </div>                             

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-bg footer-p pt-90">
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="copy-text">
                            <a href="#"><img src="{{ ___getSite()->dataSchool->logo_url }}" alt="img"></a>   
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">          
                        
                    </div>
                    <div class="col-lg-4 text-right text-xl-right">
                        Copyright &copy; {{ ___getSite()->dataSchool->name }} 2023 . Todos los derechos reservados.     
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @include('template.foot-libraries')

    <script>

        const sendSurface = () => {
            
            let url_sender = '{{ route("site-create-surface") }}';

            let name       = $('#name').val();

            let email      = $('#email').val();

            let comments   = $('#comments').val();

            if ( name == '' ) {

                alert('ingresa tu nombre');

                return true;

            }

            if ( email == '' ) {

                alert('ingresa tu correo');

                return true;

            }

            if ( comments == '') {

                alert('ingresa un comentario')

                return true;

            }
            
            $.ajax({

            url      : url_sender,
            headers  : { 'X-CSRF-TOKEN': $('meta[name="csrf-token_UWl0eGVuTg=="]').attr('content') },
            method   : 'POST',
            data     : { 
                'name'     : name, 
                'email'    : email,
                'comments' : comments
            },
            dataType : 'json',
            success  : function( response ) {
                
                $('#name').val('');

                $('#email').val('');

                $('#comments').val('');

                alert('Eureka!, mensaje enviado.');

            }, error : function() {

                    console.log("existió un problema");

                }
            });

        }
            
    </script>
    
</body>
</html>