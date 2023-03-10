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
            <section class="search-area pt-120 pb-120 p-relative fix" style="background-image:url({{ asset('templates/template-one/img/bg/search_bg.png') }});  background-position: center center; background-repeat: no-repeat; background-size: cover;">
                <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="an-img-01"></div>
                <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-05.png') }}" alt="contact-bg-an-01"></div>
                <div class="container">
                    <div class="row justify-content-center  align-items-center">
                  	    <div class="col-lg-8">
                            <div class="contact-bg">
                            <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h2>
                                  Search For Courses
                                </h2>
                                <p>Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational.</p>
                            </div>
                                
						<form action="mail.php" method="post" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
							<div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">                                    
                                    <input type="text" id="firstn2" name="firstn" placeholder="First Name" required>
                                </div>                               
                            </div>
							
							<div class="col-lg-6">                               
                                <div class="contact-field p-relative c-subject mb-20">                                   
                                    <input type="text" id="email3" name="email" placeholder="Email" required>
                                </div>
                            </div>		
                            <div class="col-lg-6">                               
                                <div class="contact-field p-relative c-option mb-20">                                   
                                    <select name="instructor" id="instructor">
                                      <option value="instructore">Instructor</option>
                                      <option value="hot-stone-message">Hot Stone Message</option>
                                      <option value="facil-therophy">Facil & Therophy</option>
                                    </select>
                                </div>
                            </div>	
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-option mb-20">                                   
                                        <select name="department" id="department">
                                          <option value="department">Department</option>
                                          <option value="hot-stone-message">Hot Stone Message</option>
                                          <option value="facil-therophy">Facil & Therophy</option>
                                        </select>
                                    </div>
                                </div>
                          <div class="col-lg-6">                               
                                <div class="contact-field p-relative c-option mb-20">                                   
                                        <select name="campus" id="campus">
                                          <option value="campus">Campus</option>
                                          <option value="hot-stone-message">Hot Stone Message</option>
                                          <option value="facil-therophy">Facil & Therophy</option>
                                        </select>
                                    </div>
                            </div>	
                                <div class="col-lg-6">
                                <div class="contact-field p-relative c-option mb-20">                                   
                                        <select name="level" id="level">
                                          <option value="level">Level</option>
                                          <option value="hot-stone-message">Hot Stone Message</option>
                                          <option value="facil-therophy">Facil & Therophy</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-lg-12">
                                
                                <div class="slider-btn">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Search Courses Here  <i class="fal fa-long-arrow-right"></i></button>				
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
                                <img src="{{ asset('templates/template-one/img/features/about_img.png') }}" alt="img">                              
                            </div>                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h2>Admission & Aid</h2>                                   
                                </div>
                                   <p class="txt-clr">Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational.</p>
                                   <p class="txt-clr">At Estuidar University, we prepare you to launch your career by pro supportive, creative, and professional environment from which to learn practical skills, build a network of industry contacts.</p>
                                 <div class="slider-btn mt-20">                                          
                                     <a href="about.html" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>				
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
                       
                        @foreach ( ___getCertifications() as $cer => $certification )

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
            <section id="blog" class="blog-area p-relative fix pt-120 pb-90" style="background-image:url({{ asset('templates/template-one/img/bg/blog_bg.png') }}); background-repeat: no-repeat; background-position: top;">
                <div class="container">
                    <div class="row align-items-center"> 
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                                <h5><i class="fal fa-graduation-cap"></i> Our Blog</h5>
                                <h2>
                                 Latest Blog & News
                                </h2>
                               
                            </div>
                           
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-4 col-md-6">
                            <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.html"><img src="{{ asset('templates/template-one/img/blog/inner_b1.jpg') }}" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>                    
                                <div class="blog-content2">    
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="blog-details.html">Cras accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.html"><img src="{{ asset('templates/template-one/img/blog/inner_b2.jpg') }}" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>
                                <div class="blog-content2">                                    
                                   
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="blog-details.html">Dras accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="blog-thumb2">
                                    <a href="blog-details.html"><img src="{{ asset('templates/template-one/img/blog/inner_b3.jpg') }}" alt="img"></a>
                                     <div class="date-home">
                                        <i class="fal fa-calendar-alt"></i> 24th March 2023
                                    </div>
                                </div>
                                <div class="blog-content2">                                    
                                   
                                   <div class="b-meta">
                                        <div class="meta-info">
                                            <ul>
                                                <li><i class="fal fa-user"></i> By Admin </li>
                                                <li><i class="fal fa-comments"></i> 3 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h4><a href="blog-details.html">Seas accumsan nulla nec lacus ultricies placerat.</a></h4> 
                                    <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                    <div class="blog-btn"><a href="blog-details.html">Read More <i class="fal fa-long-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                
                        
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
                                    <h2>Subscribe for Newsletter</h2>
                                    <p>Manage Your Business With Our Software</p>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                             <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                               <div class="form-group p-relative">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                               </div>
                               <!-- /Form-email -->	
                            </form>
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- newslater-aread-end -->
         
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