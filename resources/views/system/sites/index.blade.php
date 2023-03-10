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
                                    <a href="about.html" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s">Discover More <i class="fal fa-long-arrow-right"></i></a>
                                    <a href="contact.html" class="btn ss-btn active" data-animation="fadeInLeft" data-delay=".4s">Contact Us <i class="fal fa-long-arrow-right"></i></a>
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
    <section class="service-details-two p-relative">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="services-box07">
                        
                     <div class="sr-contner">
                        <div class="icon">
                        <img src="{{ asset('templates/template-one/img/icon/sve-icon4.png') }}" alt="icon01">
                        </div>
                        <div class="text">
                            <h5><a href="about.html">Education Services</a></h5>
                            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing listically</p>
                            <a href="about.html">Read More <i class="fal fa-long-arrow-right"></i></a>
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
                            <h5><a href="about.html">International Hubs</a></h5>
                            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing listically</p>
                            <a href="about.html">Read More <i class="fal fa-long-arrow-right"></i></a>
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
                            <h5><a href="about.html">Bachelor’s and Master’s</a></h5>
                            <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea sharing listically</p>
                            <a href="about.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                     </div>
                        
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- service-details2-area-end -->
    
     <!-- about-area -->
    <section class="about-area about-p pt-120 pb-120 p-relative fix" style="background: #eff7ff;">
        <div class="animations-02"><img src="{{ asset('templates/template-one/img/bg/an-img-02.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                 <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ asset('templates/template-one/img/features/about_img_02.png') }}" alt="img">   
                       <div class="about-text second-about">
                            <span>25 <sub>+</sub></span> 
                            <p>Years of Experience</p>
                        </div>
                    </div>
                  
                </div>
                
            <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content pl-15 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                        <div class="about-title second-title pb-25">  
                            <h5><i class="fal fa-graduation-cap"></i> About Our University</h5>
                            <h2>A Few Words About the University</h2>                                   
                        </div>
                           <p class="txt-clr">Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational.</p>
                            <p>We are proud to offer top ranige in employment services such and asser payroll and benefits administrato managemen and asistance with global business range ployment employer  readings from religious texts or literature are also commonly inc compliance.</p>
                            <div class="about-content2">
                            <div class="row">
                            <div class="col-md-12">
                             <ul class="green2">                                              
                                        <li><div class="abcontent"><div class="ano"><span>01</span></div> <div class="text"><h3>Doctoral Degrees</h3> <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p></div></div></li>
                                        <li><div class="abcontent"><div class="ano"><span>02</span></div> <div class="text"><h3>Global Students</h3> <p>consectetur adipiscing elit sed do eiusmod tem incid idunt.</p></div></div></li>
                                        
                                   </ul>
                            </div>
                            </div>
                        </div>
                         <div class="slider-btn mt-20">                                          
                             <a href="about.html" class="btn ss-btn smoth-scroll">Read More <i class="fal fa-long-arrow-right"></i></a>				
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </section>
    <!-- about-area-end -->
     <!-- courses-area -->
    <section class="courses pt-120 pb-120 p-relative fix">
         <div class="animations-01"><img src="{{ asset('templates/template-one/img/bg/an-img-03.png') }}" alt="an-img-01"></div>
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 p-relative">
                   <div class="section-title center-align mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Our Courses</h5>
                        <h2>
                          Graduate Programs
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
                                <a href="{{ route('program-show', [ 'slug' => $program->slug ]) }}" class="readmore">Read More <i class="fal fa-long-arrow-right"></i></a>
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
                        <h2>Our Best Features</h2>
                        <p>Special wedding garments are often worn, and the ceremony is sometimes followed by a wedding reception. Music, poetry.</p>
                    </div>
                    <ul class="pr-20">
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                    <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon01.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Skilled Teachers</h3>
                                    <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings from.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                     <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon02.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Affordable Courses</h3>
                                    <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings from.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                                <div class="dnumber">
                                   <div class="date-box"><img src="{{ asset('templates/template-one/img/icon/fea-icon03.png') }}" alt="icon"></div>
                                </div>
                                <div class="text">
                                    <h3>Efficient & Flexible</h3>
                                    <p>Special wedding garments are often worn, and the ceremony is sttimes followed by a wedding reception. Music, poetry, prayers, or readings from.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="step-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                        <img src="{{ asset('templates/template-one/img/bg/steps-img.png') }}" alt="class image">
                    </div>
                   
                </div>
                
               
                
            </div>
            
        </div>
    </section>
    <!-- steps-area-end -->
     <!-- event-area -->
    <section class="event pt-120 pb-90 p-relative fix">
         <div class="animations-06"><img src="{{ asset('templates/template-one/img/bg/an-img-06.png') }}" alt="an-img-01"></div>
        <div class="animations-07"><img src="{{ asset('templates/template-one/img/bg/an-img-07.png') }}" alt="contact-bg-an-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-08.png') }}" alt="contact-bg-an-01"></div>
        <div class="animations-09"><img src="{{ asset('templates/template-one/img/bg/an-img-09.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 p-relative">
                   <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                         <h5><i class="fal fa-graduation-cap"></i> Our Events</h5>
                        <h2>
                          Upcoming Events 
                        </h2>
                     
                    </div>
                </div>                        
                 
            </div>
            <div class="row" id="upcomingEvents">
             
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-1.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>18</strong> March, 2023</div>
                            <h3><a href="single-event.html"> Basic UI & UX Design for new development</a></h3>
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>
                {{--<div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-2.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>20</strong> March, 2023</div>
                             <h3><a href="single-event.html">Digital Education Market Briefing: Minnesota 2023</a></h3>                                   
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-3.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>22</strong> March, 2023</div>
                             <h3><a href="single-event.html"> Learning Network Webinars for Music Teachers</a></h3>                                    
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-4.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>22</strong> March, 2023</div>
                            <h3><a href="single-event.html"> Next-Gen Higher Education Students Have Arrived?</a></h3>
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-5.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>24</strong> March, 2023</div>
                             <h3><a href="single-event.html"> Digital Art & 3D Model – a future for film company</a></h3>
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="event-item mb-30 hover-zoomin">
                        <div class="thumb">
                            <a href="single-event.html"><img src="{{ asset('templates/template-one/img/bg/evn-img-6.jpg') }}" alt="contact-bg-an-01"></a>
                        </div>
                        <div class="event-content">                                    
                            <div class="date"><strong>30</strong> March, 2023</div>
                           <h3><a href="single-event.html"> Conscious Discipline Summer Institute</a></h3>
                             <p>Seamlessly visualize quality ellectual capital without superior collaboration and idea tically</p>
                            <div class="time">3:30 pm - 4:30 pm <i class="fal fa-long-arrow-right"></i> <strong>United Kingdom</strong></div>
                        </div>                       
                    </div>
                </div>--}}

            </div>
            
             
        </div>
    </section>
   <!-- courses-area -->
    <!-- cta-area -->
    <section class="cta-area cta-bg pt-50 pb-50" style="background-image:url({{ asset('templates/template-one/img/bg/cta_bg02.png') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>Scholarship Programs</h2>
                        <p>At Estuidar University, we prepare you to launch your career by providing a supportive, creative, and professional environment from which to learn practical skills and build a network of industry contacts.</p>
                    </div>
                                     
                </div>
                <div class="col-lg-4 text-right"> 
                    <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                              <a href="about.html" class="btn ss-btn smoth-scroll">Financial Aid <i class="fal fa-long-arrow-right"></i></a>			
                        </div>
                </div>
            
            </div>
        </div>
    </section>
    <!-- cta-area-end -->	
    <!-- frequently-area -->
    <section class="faq-area pt-120 pb-120 p-relative fix">
        <div class="animations-10"><img src="{{ asset('templates/template-one/img/bg/an-img-04.png') }}" alt="an-img-01"></div>
        <div class="animations-08"><img src="{{ asset('templates/template-one/img/bg/an-img-05.png') }}" alt="contact-bg-an-01"></div>
        <div class="container">
            <div class="row justify-content-center  align-items-center">
               
                <div class="col-lg-7">
                    <div class="section-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2>Get every single answer here.</h2>
                        <p>A business or organization established to provide a particular service, typically one that involves a organizing transactions.</p>
                    </div>
                       <div class="faq-wrap mt-30 pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="faq-btn" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree"  >
                                           01 Cras turpis felis, elementum sed mi at arcu ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse show" 
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne"  >
                                           02 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo"  >
                                          03 Donec maximus, sapien id auctor ornare ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                      Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                    </div>
                                </div>
                            </div>   
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour"  >
                                        04 Vestibulum nibh risus, in neque eleifendulputate sem ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="faq-btn collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive"  >
                                        05 Donec maximus, sapien id auctor ornare ?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        Our community is being called to reimagine the future. As the only university where a renowned design school comes together with premier colleges, we are making learning more relevant and transformational. We are enriched by the wide range.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
                <div class="col-lg-5">
                    <div class="contact-bg02">
                    <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                        <h2>
                          Make An Contact
                        </h2>
                      
                    </div>
                        
                <form action="mail.php" method="post" class="contact-form mt-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-field p-relative c-name mb-20">                                    
                            <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                        </div>                               
                    </div>
                    
                    <div class="col-lg-12">                               
                        <div class="contact-field p-relative c-subject mb-20">                                   
                            <input type="text" id="email" name="email" placeholder="Email" required>
                        </div>
                    </div>		
                    <div class="col-lg-12">                               
                        <div class="contact-field p-relative c-subject mb-20">                                   
                            <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                        </div>
                    </div>	
                  
                    <div class="col-lg-12">
                        <div class="contact-field p-relative c-message mb-30">                                  
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                        </div>
                        <div class="slider-btn">                                          
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span> <i class="fal fa-long-arrow-right"></i></button>				
                                </div>                             
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
    <section class="cta-area cta-bg pt-160 pb-160" style="background-image:url({{ asset('templates/template-one/img/bg/cta_bg.png') }})">
        <div class="container">
            <div class="row justify-content-center  align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="section-title cta-title video-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <h2> We're <span>Qeducato</span> & We're Diffirent</h2>
                        <p>Our community is being called to reimagine the future. As the only university where a renowned design school  colleges, </p>	
                    </div>
                                     
                </div>
                <div class="col-lg-2 col-md-2">
                </div>
               <div class="col-lg-4">

                        <div class="s-video-content">
                            <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="popup-video mb-50"><img src="{{ asset('templates/template-one/img/bg/play-button.png') }}" alt="circle_right"></a>
                           
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
                        <h5><i class="fal fa-graduation-cap"></i> Testimonial</h5>
                        <h2>
                         What Our Clients Says
                        </h2>
                     
                    </div>
                   
                </div>
                
                <div class="col-lg-12">
                    <div class="testimonial-active wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                        <div class="single-testimonial text-center">
                             <div class="qt-img">
                            <img src="{{ asset('templates/template-one/img/testimonial/qt-icon.png') }}" alt="img">
                            </div>
                            <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
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
                            <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
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
                            <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
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
                            <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
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
                            <p>Curabitur ac tortor ante. Sed quis iaculis risus. Ut ultrices ligula aliquet odio tristique euismod. Donec efficitur dolor in turpis aliquet, at mollis.</p>
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

                @foreach ( $posts as $pot => $post )
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="{{ route('post-show', ['slug' => $post->slug] ) }}"><img src="{{ asset('templates/template-one/img/blog/inner_b1.jpg') }}" alt="img"></a>
                                <div class="date-home">
                                    <i class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::createFromDate($post->created_at)->isoFormat('MMMM Do YYYY') }}
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

@endsection

@section('scripts')

<script src="{{ asset('scripts/sites/index.blade.js') }}"></script>

<script>

    let url_get_data_notices = '{{ route("site-getDataNotices") }}';

    let date                 = moment().format('YYYY-MM-DD');
    
    cargaAutomatica( url_get_data_notices, date );

    /*const getNoticesDate = () => {
        
        let selectedDate = $('#noticesDate').val();
       
        cargaAutomatica( url_get_data_notices, selectedDate );

    }*/
        
</script>

@endsection