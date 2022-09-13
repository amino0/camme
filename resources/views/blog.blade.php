<!DOCTYPE html>
<html lang="zxx">  
    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>CAMME - Central d'Achat de Medicament et Matériel Essentiel</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="{{asset('template/apple-touch-icon.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('template/assets/images/fav.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/font-awesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/fonts/flaticon.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/animate.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/owl.carousel.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/slick.css')}}">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/off-canvas.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="{{asset('template/assets/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/responsive.css')}}">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area">
                        <div class="container">
                           <div class="row rs-vertical-middle">
                               <div class="col-lg-2">
                                   <div class="logo-part">
                                       <a href="{{url('/')}}"><img src="{{asset('template/assets/images/logo-dark.png')}}" alt=""></a>
                                   </div>
                               </div>
                               <div class="col-lg-10 text-right">
                                   <ul class="rs-contact-info">
                                       <li class="contact-part">
                                           <i class="flaticon-location"></i>
                                           <span class="contact-info">
                                               <span>Address</span>
                                               10008, Djibouti
                                           </span>
                                       </li>
                                       <li class="contact-part">
                                           <i class="flaticon-email"></i>
                                           <span class="contact-info">
                                               <span>E-mail</span>
                                               <a href="#"> contact@camme.gouv.dj</a>
                                           </span>
                                       </li>
                                       <li class="contact-part no-border">
                                            <i class="flaticon-call"></i>
                                           <span class="contact-info">
                                               <span>Phone</span>
                                                +253 21 35 32 56
                                           </span>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                        </div>
                    </div>
                    <!-- Topbar Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="logo-area">
                                <a href="{{url('/')}}">
                                    <img class="sticky-logo" src="{{asset('template/assets/images/logo-dark.png')}}" alt="logo">
                                </a>
                            </div>

                            <div class="rs-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a href="{{url('/')}}" class="mobile-logo">
                                            <img src="{{asset('template/assets/images/logo-light.png')}}" alt="logo">
                                        </a>
                                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="rs-menu">                                        
                                        <ul class="nav-menu">
                                           <li class="rs-mega-menu"> <a href="{{url('/')}}">Acceuil</a>
                                               
                                            </li>
                                            <li>
                                                <a href="{{url('/apropos')}}">A propos</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="{{url('/motdudirecteur')}}">Qui somme nous ?</a>
                                                
                                            </li>
                                            <li class="current-menu-item">
                                                <a href="{{url('/actualites/1')}}">A la une</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                               <a href="blog.html">E-commande</a>
                                               <ul class="sub-menu">
                                                   <li><a href="blog.html">S'incrire</a> </li>
                                                   <li><a href="blog-details.html">se connecter</a></li>
                                               </ul>
                                            </li>
                                            <li>
                                               <a href="{{url('/contact')}}">Contact</a>
                                            </li>
                                        </ul> <!-- //.nav-menu -->
                                    </nav>                                        
                                </div> <!-- //.main-menu -->                                
                            </div>
                            <div class="expand-btn-inner search-icon hidden-sticky hidden-md">
                                <ul>
                                    <li class="sidebarmenu-search">
                                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="toolbar-sl-share">
                                   <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->
                    
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->
         
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4">
                <div class="breadcrumbs-inner text-center">
                    @foreach ($blog as $row)
                        
                    
                    <h1 class="page-title new-title pb-10">{{$row->titre}}</h1>
                    @endforeach
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 pb-120 md-pt-90 md-pb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                                
                              
                                <div class="recent-posts mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Latest Posts</h3>
                                    </div>
                                    @foreach ($blogs as $row)
                                    @php
                                    $url = str_replace("\\", '/',$row->image_petit);
                               @endphp
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="#"><img src="{{asset('storage/'.$url)}}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="#">{{$row->titre}} </a>
                                            <span class="date">
                                                <i class="fa fa-calendar"></i>
                                                {{ \Carbon\Carbon::parse($row->date)->format('j F, Y') }}
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach  

                                </div>

                                
                            </div>
                        </div>
                        @foreach ($blog as $row)
                        @php
                        $urll = str_replace("\\", '/',$row->image);
                   @endphp
                        <div class="col-lg-8 pr-35 md-pr-15">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="#"><img src="{{asset('storage/'.$urll)}}" alt=""></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> {{ \Carbon\Carbon::parse($row->date)->format('j F, Y') }} </span>
                                                </li> 
                                                <li>
                                                </li> 
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#">{{$row->type}}</a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p>
{{$row->resume}}                                            </p>
                                           {!! $row->texte !!} 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div> 
                </div>
            </div>
            <!-- Blog Section End --> 

        </div> 
        <!-- Main content End -->
           
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer style2">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="{{url('/')}}"><img src="{{asset('template/assets/images/logo-light.png')}}" alt=""></a>
                            </div>
                              <div class="textwidget white-color pb-30"><p>Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis</p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                  <li> 
                                      <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a> 
                                  </li>

                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a> 
                                  </li>
                                                                           
                              </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">Qui somme nous ?</h3>
                            <ul class="site-map">
                                <li><a href="{{url('/motdudirecteur')}}">Mot du Directeur</a></li>
                                <li><a href="{{url('/mission')}}">Mission & valeur</a></li>
                                <li><a href="{{url('/organisation')}}">Organisation</a></li>
                                <li><a href="{{url('/apropos')}}">A propos</a></li>
                             
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">Information du contact</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">10008, Djibouti</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:+25321353256"> +253 21 35 32 56</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:contact@camme.gouv.dj">contact@camme.gouv.dj</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        Heur de Travail: 08:00 - 17:00   
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <h3 class="widget-title">Newsletter</h3>
                            <p class="widget-desc white-color">We denounce with righteous and in and dislike men who are so beguiled and demo realized.</p>
                            <p>
                                <input type="email" name="EMAIL" placeholder="Your email address" required="">
                                <em class="paper-plane"><input type="submit" value="Sign up"></em>
                                <i class="flaticon-send"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                       
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; 2022 All Rights Reserved. Developed By <a href="http://dheemangroup.com/">Dhemman Group</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

         <!-- modernizr js -->
        <script src="{{asset('template/assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('template/assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('template/assets/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{asset('template/assets/js/rsmenu-main.js')}}"></script> 
        <!-- op nav js -->
        <script src="{{asset('template/assets/js/jquery.nav.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('template/assets/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('template/assets/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('template/assets/js/skill.bars.jquery.js')}}"></script>
        <script src="{{asset('template/assets/js/jquery.counterup.min.js')}}"></script> 
         <!-- counter top js -->
        <script src="{{asset('template/assets/js/waypoints.min.js')}}"></script>
        <!-- swiper js -->
        <script src="{{asset('template/assets/js/swiper.min.js')}}"></script>   
        <!-- particles js -->
        <script src="{{asset('template/assets/js/particles.min.js')}}"></script>  
        <!-- magnific popup js -->
        <script src="{{asset('template/assets/js/jquery.magnific-popup.min.js')}}"></script>      
        <!-- plugins js -->
        <script src="{{asset('template/assets/js/plugins.js')}}"></script>
        <!-- pointer js -->
        <script src="{{asset('template/assets/js/pointer.js')}}"></script>
        <!-- contact form js -->
        <script src="{{asset('template/assets/js/contact.form.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('template/assets/js/main.js')}}"></script>
    </body>
</html>