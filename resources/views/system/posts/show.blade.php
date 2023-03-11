@extends('template.app')

@section('content')

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center" style="background-image:url({{ asset('templates/template-one/img/bg/bdrc-bg.png') }})">
              
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Detalles del Post</h2>    
                            
                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">
                      
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Detalles del Post</li>
                            </ol>
                        </nav>
                    </div>
                
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->   
    <!-- inner-blog -->
    <section class="inner-blog b-details-p pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="details__content pb-30">
                            <h2>{{ $post->title }}</h2>
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-eye"></i> 100 Views  </li>
                                    <li><i class="fal fa-comments"></i> 35 Comentarios</li>
                                    <li><i class="fal fa-calendar-alt"></i> {{ \Carbon\Carbon::createFromDate($post->created_at)->isoFormat('MMMM Do YYYY') }}</li>
                                </ul>
                            </div>

                            {!! $post->content !!}

                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="post__tag">
                                        <h5>Etiquetas relacionadas</h5>
                                        <ul>
                                            <li><a href="#">Orgánicos</a></li>
                                            <li><a href="#">Comidas</a></li>
                                            <li><a href="#">Delicioso</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="posts_navigation pt-35 pb-35">
                            <div class="row align-items-center">
                                <div class="col-xl-4 col-md-5">
                                    <div class="prev-link">
                                        <span>Post Anterior</span>
                                        <h4><a href="#">Tips Minimalistas</a></h4>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-2 text-left text-md-center">
                                    <a href="blog.html" class="blog-filter"><img src="img/icon/c_d01.png" alt=""></a>
                                </div>
                                <div class="col-xl-4 col-md-5">
                                    <div class="next-link text-left text-md-right">
                                        <span>Siguiente Post</span>
                                        <h4><a href="#">Menos es Más</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related__post mt-45 mb-85">
                            <div class="post-title">
                                <h4>Post Relacionados</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="related-post-wrap mb-30">
                                        <div class="post-thumb">
                                            <img src="img/blog/b_details03.jpg" alt="">
                                        </div>
                                        <div class="rp__content">
                                            <h3><a href="#">Texto para determinar el tamaño del contenedor</a></h3>
                                            <p>Texto con Lorem ipsum, para determinar el tamaño del parrafo, en cosideración al titulo, subtitulo y contenido, del post seleccionado.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="related-post-wrap mb-30">
                                        <div class="post-thumb">
                                            <img src="img/blog/b_details04.jpg" alt="">
                                        </div>
                                        <div class="rp__content">
                                            <h3><a href="#">Texto para determinar el tamaño del contenedor</a></h3>
                                            <p>Texto con Lorem ipsum, para determinar el tamaño del parrafo, en cosideración al titulo, subtitulo y contenido, del post seleccionado.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="avatar__wrap text-center mb-45">
                            <div class="avatar-img">
                                <img src="img/blog/comment/avatar.png" alt="">
                            </div>
                            <div class="avatar__info">
                                <h5>Rosalina William</h5>
                                <div class="avatar__info-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="avatar__wrap-content">
                                <p>Apacionada de los sitios web, creadora de contanido, bloger por naturaleza, entusiasta e inteligente, me gusta descubrir cosas nuevas con la ayuda de la tecnología.</p>
                            </div>
                        </div>
                        <div class="comment__wrap pb-45">
                            <div class="comment__wrap-title">
                                <h5>Comentarios</h5>
                            </div>
                            <div class="single__comment mb-35">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_01.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>ALina Kelian</h6>
                                        <span>19 de May 2021</span>
                                    </div>
                                    <p>Las rodillas de la abeja te muerden el brazo y te lo cortan, caramba, destripado mate, carajo, viejo de su nuez, argy, bargy, vagabundo, enculado, caído.</p>
                                     <a href="#" class="comment-reply mt-15"><i class="fas fa-reply"></i> Re</a>
                                </div>
                            </div>
                            <div class="single__comment children mb-35">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_02.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>Rlex Kelian <i class="fas fa-bookmark"></i></h6>
                                        <span>19 de May 2021</span>
                                    </div>
                                     <p>¿Diga uno que termine bobby enculado muerda su brazo destripado mate, David victoria taza de esponja de char cap fanny alrededor.</p>
                                     <a href="#" class="comment-reply mt-15"><i class="fas fa-reply"></i> Re</a>
                                </div>
                            </div>
                            <div class="single__comment">
                                <div class="comments-avatar">
                                    <img src="img/blog/comment/c_03.png" alt="">
                                </div>
                                <div class="comment-text">
                                    <div class="avatar-name mb-15">
                                        <h6>Roboto Alex</h6>
                                        <span>21 de Mayo 2021</span>
                                    </div>
                                     <p>Hornear pasteles es zapatero botas de agua William geeza bits y bobs qué tonto es tu ronda,</p>
                                    <a href="#" class="comment-reply mt-15"><i class="fas fa-reply"></i> Re</a>
                                </div>
                            </div>
                        </div>
                       <div id="comments" class="comments-area  mt-45">
                           <div id="respond" class="comment-respond">
                              <h3 id="reply-title" class="comment-reply-title">Deja una comentario <small><a rel="nofollow" id="cancel-comment-reply-link" href="/finco/?p=2112#respond" style="display:none;">Cancelar comentario</a></small></h3>
                              <form action="http://wordpress.zcube.in/finco/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                 <p class="comment-notes"><span id="email-notes">Su dirección de correo electrónico no será publicada.</span> Los campos obligatorios están marcados <span class="required">*</span></p>
                                 <p class="comment-field"><i class="fas fa-user"></i><input id="author" placeholder="Nombres" name="author" type="text"></p>
                                 <p class="comment-field"><i class="fas fa-envelope"></i><input id="email" placeholder="tucorreo@example.com" name="email" type="text"></p>
                                 <p class="comment-field"><i class="fas fa-globe"></i><input id="url" name="url" placeholder="http://tusitio.com" type="text"> </p>
                                 <p class="comment-form-comment"><label for="comment">Comentario</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                                 <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Comentar"> <input type="hidden" name="comment_post_ID" value="2112" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                 </p>
                              </form>
                           </div>
                           <!-- #respond -->
                        </div>

                    </div>
                </div>
                 <!-- #right side -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                   <aside class="sidebar-widget">
                      <section id="search-3" class="widget widget_search">
                         <h2 class="widget-title">Buscar</h2>
                         <form role="search" method="get" class="search-form" action="http://wordpress.zcube.in/finco/">
                            <label>
                            <span class="screen-reader-text">Buscar por:</span>
                            <input type="search" class="search-field" placeholder="Buscar &hellip;" value="" name="s" />
                            </label>
                            <input type="submit" class="search-submit" value="Buscar" />
                         </form>
                      </section>
                      <section id="custom_html-5" class="widget_text widget widget_custom_html">
                         <h2 class="widget-title">Siguenos</h2>
                         <div class="textwidget custom-html-widget">
                            <div class="widget-social">
                               <a href="#"><i class="fab fa-twitter"></i></a>
                               <a href="#"><i class="fab fa-pinterest-p"></i></a>
                               <a href="#"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fab fa-instagram"></i></a>
                               <a href="#"><i class="fab fa-wordpress"></i></a>
                            </div>
                         </div>
                      </section>
                      <section id="categories-1" class="widget widget_categories">
                         <h2 class="widget-title">Categories</h2>
                         <ul>
                            <li class="cat-item cat-item-16"><a href="#">Marca</a> (4)</li>
                            <li class="cat-item cat-item-23"><a href="#">Corporativo</a> (3)</li>
                            <li class="cat-item cat-item-18"><a href="#">Diseño</a> (3)</li>
                            <li class="cat-item cat-item-22"><a href="#">Galería</a> (3)</li>
                         </ul>
                      </section>
                      <section id="recent-posts-4" class="widget widget_recent_entries">
                         <h2 class="widget-title">Posts Recientes</h2>
                         <ul>
                            <li>
                               <a href="#">Psicología de la experiencia del usuario y Smshing del rendimiento</a>
                               <span class="post-date">Agosto 19, 2020</span>
                            </li>
                            <li>
                               <a href="#">Costo mensual de desarrollo web de JavaScript</a>
                               <span class="post-date">Agosto 19, 2020</span>
                            </li>
                            <li>
                               <a href="#">Hay muchos pasajes de variación de como disponibles.</a>
                               <span class="post-date">AuAgosto 19, 2020</span>
                            </li>
                         </ul>
                      </section>
                      <section id="tag_cloud-1" class="widget widget_tag_cloud">
                         <h2 class="widget-title">Tag</h2>
                         <div class="tagcloud">
                             <a href="#" class="tag-cloud-link tag-link-28 tag-link-position-1" style="font-size: 8pt;" aria-label="app (1 item)">apps</a>
                            <a href="#" class="tag-cloud-link tag-link-17 tag-link-position-2" style="font-size: 8pt;" aria-label="Branding (1 item)">marca</a>
                            <a href="#" class="tag-cloud-link tag-link-20 tag-link-position-3" style="font-size: 8pt;" aria-label="corporat (1 item)">corporativo</a>
                            <a href="#" class="tag-cloud-link tag-link-24 tag-link-position-4" style="font-size: 16.4pt;" aria-label="Design (2 items)">diseño</a>
                            <a href="#" class="tag-cloud-link tag-link-25 tag-link-position-5" style="font-size: 22pt;" aria-label="gallery (3 items)">galería</a>
                            <a href="#" class="tag-cloud-link tag-link-26 tag-link-position-6" style="font-size: 8pt;" aria-label="video (1 item)">videos</a>
                            <a href="#" class="tag-cloud-link tag-link-29 tag-link-position-7" style="font-size: 16.4pt;" aria-label="web design (2 items)">diseño web</a>
                         </div>
                      </section>
                   </aside>
                </div>
                <!-- #right side end -->
            </div>
        </div>
    </section>
    <!-- inner-blog-end -->

@endsection

@section('scripts')

@endsection