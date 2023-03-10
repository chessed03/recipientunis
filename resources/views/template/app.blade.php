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
                                    Follow us:-
                                    <a href="{{ ___getSite()->dataSchool->facebook }}" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->instagram }}" title="Intagram"><i class="fab fa-instagram"></i></a>               
                                    <a href="{{ ___getSite()->dataSchool->twitter }}" title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ ___getSite()->dataSchool->youtube }}" title="Youtube"><i class="fab fa-youtube"></i></a>
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
                                            <span>Call Now !</span>
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
                                            <span>Email Now</span>
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
                                    <a href="index.html"><img src="{{ ___getSite()->dataSchool->logo_url }}" alt="logo" width="55%"></a>{{--se agrego el porcentaje--}}
                                </div>
                            </div>
                           <div class="col-xl-6 col-lg-6">
                              
                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                          <ul>
                                            <li class="has-sub">
                                                <a href="index.html">Home</a>
                                                <ul>													
													<li><a href="index.html">University</a></li>
													<li><a href="index-2.html">Kindergarten</a></li>													
													<li><a href="index-3.html">High School</a></li>													
												</ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>        
                                            
                                              <li class="has-sub">
                                               <a href="courses.html">Courses</a>
                                                <ul>													
													 <li><a href="courses.html">Courses</a></li>
													<li> <a href="courses-2.html">Courses 02</a></li>
                                                    <li> <a href="single-courses.html">Course Details</a></li>
                                                    <li> <a href="single-courses-2.html">Course Details 02</a></li>
												</ul>
                                            </li>  
                                              <li class="has-sub"><a href="#">Pages</a>
												<ul>
                                                    <li><a href="event.html">Event</a></li>
                                                    <li><a href="single-event.html">Event Details</a></li>
                                                    <li><a href="projects.html">Gallery</a></li>
                                                    <li><a href="pricing.html">Pricing</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="team.html">Teacher</a></li>
                                                    <li><a href="team-single.html">Teacher Details</a></li>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                  </ul>
											</li>
                                            <li class="has-sub"> 
                                                <a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>


                                            <li><a href="contact.html">Contact</a></li>                                               
                                        </ul>
                                    </nav>
                                </div>
                            </div>   
                             <div class="col-xl-3 col-lg-3 text-right d-none d-lg-block text-right text-xl-right">
                                 <div class="login">
                                    <ul>
                                        <li><a href="#" class="menu-tigger"><i class="fal fa-search"></i></a></li>
                                        <li>
                                            <div class="second-header-btn">
                                               <a href="contact.html" class="btn">admission open</a>
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
          <div class="offcanvas-menu">
             <span class="menu-close"><i class="fas fa-times"></i></span>
             <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                <input type="text" name="s" id="search" placeholder="Search"/>
                <button><i class="fa fa-search"></i></button>
             </form>
             <div id="cssmenu3" class="menu-one-page-menu-container">
                <ul  class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="index.html">Home</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="about.html">About Us</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="courses.html">Courses</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="pricing.html">Pricing </a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="team.html">Teacher</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="projects.html">Gallery</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="blog.html">Blog</a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="contact.html">Contact</a></li>
                </ul>
             </div>
             <div id="cssmenu2" class="menu-one-page-menu-container">
                <ul id="menu-one-page-menu-12" class="menu">
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>{{ ___getSite()->dataSchool->phone_main }}</span></a></li>
                   <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>{{ ___getSite()->dataSchool->email_main }}</span></a></li>
                </ul>
             </div>
          </div>
          <div class="offcanvas-overly"></div>
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
                                    <h2>About Us</h2>
                                </div>
                                <div class="f-contact">
                                     <p>Suspendisse non sem ante. Cras pretium gravida leo a convallis. Nam malesuada interdum metus, sit amet dictum ante congue eu. Maecenas ut maximus enim.</p>
                                    
                                    </div>
                                 <div class="footer-social mt-10">                                    
                                    <a href="{{ ___getSite()->dataSchool->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>    
                            </div>
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Links</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html"> About</a></li>
                                        <li><a href="courses.html">Courses</a></li>
                                        <li><a href="contact.html"> Contact Us</a></li>
                                        <li><a href="blog.html">Blog </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Latest Post</h2>
                                </div>
                                <div class="recent-blog-footer">
                                    <ul>
                                        <li>
                                            <div class="thum"> <img src="{{ asset('templates/template-one/img/blog/s-blogimg-01.png') }}" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nothing impossble to need hard work</a>
                                            <span>7 March, 2020</span></div>
                                        </li>
                                        
                                        <li>
                                            <div class="thum"> <img src="{{ asset('templates/template-one/img/blog/s-blogimg-02.png') }}" alt="img"></div>
                                            <div class="text"> <a href="blog-details.html">Nothing impossble to need hard work</a>
                                            <span>7 March, 2020</span></div>
                                        </li>
                                    
                                    </ul>
                                   
                                     
                                </div>
                            </div>
                        </div>  
                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                  <h2>Contact Us</h2>
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
                                <a href="index.html"><img src="{{ ___getSite()->dataSchool->logo_url }}" alt="img"></a>   
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">          
                            
                        </div>
                       <div class="col-lg-4 text-right text-xl-right">
                           Copyright &copy; {{ ___getSite()->dataSchool->name }} 2023 . All rights reserved.     
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