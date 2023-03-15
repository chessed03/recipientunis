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
                                    <a href="{{ ___getSite()->dataSchool->facebook }}" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->instagram }}" target="_blank" title="Intagram"><i class="fab fa-instagram"></i></a>               
                                    <a href="{{ ___getSite()->dataSchool->twitter }}" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->youtube }}" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a>
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
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                             <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="#"><img src="{{ ___getSite()->dataSchool->logo_url }}" alt="logo" width="55%"></a>{{--se agrego el porcentaje--}}
                                </div>
                            </div>
                           <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                          <ul>
                                            
                                            <li class="has-sub">
                                                <a href="#">Home</a>
                                                {{--<ul>													
													<li><a href="#">Universidad</a></li>
													<li><a href="index-2.html">Kindergarten</a></li>													
													<li><a href="index-3.html">High School</a></li>
												</ul>--}}
                                            </li>

                                            <li class="has-sub">
                                                <a href="#knowUs">Conócenos</a>
                                            </li>        
                                            
                                            <li class="has-sub">
                                               <a href="#programs">Programas</a> {{--tienen la misma ruta--}}
                                                {{--<ul>													
													 <li><a href="#">Cursos</a></li> --tienen la misma ruta--
													<li> <a href="#">Curso 02</a></li>
                                                    <li> <a href="single-courses.html">Course Details</a></li>
                                                    <li> <a href="single-courses-2.html">Course Details 02</a></li>
												</ul>--}}
                                            </li>

                                            <li class="has-sub">
                                                <a href="#events">Eventos</a>
												{{--<ul>
                                                    <li><a href="#">Eventos</a></li>
                                                    <li><a href="#">Detalles de eventos</a></li>
                                                    <li><a href="#">Galería</a></li>
                                                    <li><a href="#">Precios</a></li>
                                                    <li><a href="#">Maestros</a></li>
                                                    <li><a href="#">Teacher Details</a></li>
                                                </ul>--}}
											</li>

                                            <li class="has-sub"> 
                                                <a href="#posts">Posts</a> {{--tienen la misma ruta--}}
                                                {{--<ul>
                                                    <li><a href="#">Blog</a></li> --tienen la misma ruta-
                                                    <li><a href="#">Detalles de blog</a></li>
                                                </ul>--}}
                                            </li>

                                            <li class="has-sub">
                                                <a href="#contact">Contacto</a>
                                            </li>                                               

                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                                 <div class="login">
                                    <ul>
                                        {{--<li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>--}}
                                        <li>
                                            <div class="second-header-btn">
                                               <a href="#" class="btn">admisión abierta</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                               
                            </div>
                            
                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- offcanvas-area -->
          {{--<div class="offcanvas-menu">
             <span class="menu-close"><i class="fas fa-times"></i></span>
             <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" placeholder="Search"/>
                <button><i class="fa fa-search"></i></button>
             </form>
             <div id="cssmenu3" class="menu-one-page-menu-container">
                <ul  class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Home</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Conócenos</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Cursos</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Precios</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#">Maestros</a></li>
                </ul>
             </div>
             <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-12" class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>{{ ___getSite()->dataSchool->phone_main }}</span></a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>{{ ___getSite()->dataSchool->email_main }}</span></a></li>
                </ul>
             </div>
          </div>
          <div class="offcanvas-overly"></div>--}}
          <!-- offcanvas-end -->
        <!-- main-area -->
        <main>
            
            @yield('content')
                     
        </main>
        <!-- main-area-end -->
        <!-- footer -->
        <footer class="footer-bg footer-p pt-90" style="background-color: var( --secondary-color ); background-image: url({{ asset('templates/template-one/img/bg/footer-bg.png') }});">
            <div class="footer-top pb-70">
                <div class="container">
                    <div class="row justify-content-between">
                        
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Conócenos</h2>
                                </div>
                                <div class="f-contact">
                                     <p>Somos tu mejor opción, nuestro plan de estudio es único en el país, contacmos con las certificaciones que lo avalan.</p>
                                    
                                    </div>
                                 <div class="footer-social mt-10">                                    
                                    <a href="{{ ___getSite()->dataSchool->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->instagram }}"><i class="fab fa-instagram"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->twitter }}"><i class="fab fa-twitter"></i></a>
                                </div>    
                            </div>
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Nuestros enlaces</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#"> Conócenos</a></li>
                                        <li><a href="#">Cursos</a></li>
                                        <li><a href="#"> Contactanos</a></li>
                                        <li><a href="#">Blog </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Últimas publicaciones</h2>
                                </div>
                                <div class="recent-blog-footer">
                                    <ul>
                                        <li>
                                            <div class="thum"> <img src="{{ asset('templates/template-one/img/blog/s-blogimg-01.png') }}" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nada es imposible, cuando la constancia y la perseverancia actúan en ti.</a>
                                            <span>13 Marzo, 2023</span></div>
                                        </li>
                                        
                                        <li>
                                            <div class="thum"> <img src="{{ asset('templates/template-one/img/blog/s-blogimg-02.png') }}" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nada es imposible, cuando la constancia y la perseverancia actúan en ti.</a>
                                            <span>13 Marzo, 2023</span></div>
                                        </li>
                                    
                                    </ul>
                                   
                                     
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Contactanos</h2>
                                </div>
                                <div class="f-contact">
                                    <ul>
                                    <li>
                                        <i class="icon fal fa-phone"></i>
                                        <span><a href="tel:{{ ___getSite()->dataSchool->phone_main }}">{{ ___getSite()->dataSchool->phone_main }}</a><br><a href="tel:{{ ___getSite()->dataSchool->phone_secondary }}">{{ ___getSite()->dataSchool->phone_secondary }}</a></span>
                                    </li>
                                   <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="mailto:{{ ___getSite()->dataSchool->email_main }}">{{ ___getSite()->dataSchool->email_main }}</a>
                                       <br>
                                       <a href="mailto:{{ ___getSite()->dataSchool->email_secondary }}">{{ ___getSite()->dataSchool->email_secondary }}</a>
                                       </span>
                                    </li>
                                    <li>
                                        <i class="icon fal fa-map-marker-check"></i>
                                        <span>
                                            {{ ___getSite()->dataSchool->address }}
                                        </span>
                                    </li>
                                    
                                </ul>
                                    
                                    </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
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
        <!-- footer-end -->

        @include('template.foot-libraries')

        @yield('scripts')
		
    </body>
</html>