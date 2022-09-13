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
                                            <li class="current-menu-item">
                                                <a href="{{url('/apropos')}}">A propos</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Qui somme nous ?</a>
                                                
                                            </li>
                                            <li class="">
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
            <div class="rs-breadcrumbs img1">
                <div class="breadcrumbs-inner text-center">
                    <h1 class="page-title">A propos</h1>
                    <ul>
                        <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                            <a class="active" href="{{url('/')}}">Acceuil</a>
                        </li>
                        <li>A propos</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- About Section Start -->
            <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 md-mb-30">
                            <div class="rs-animation-shape">
                                <div class="images">
                                   <img src="{{asset('template/assets/images/about/about-3.png')}}" alt=""> 
                                </div>
                                <div class="middle-image2">
                                   <img class="dance3" src="{{asset('template/assets/images/about/effect-1.png')}}" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-60 md-pl-15">
                            <div class="contact-wrap">
                                <div class="sec-title mb-30">
                                    <div class="sub-text style-bg">A propos</div>
                                    <h2 class="title pb-38">
                                        We Are Increasing Business Success With Technology
                                    </h2>
                                    <div class="desc pb-35">
                                       Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                                    </div>
                                    <p class="margin-0 pb-15">
                                      We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.
                                    </p>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="shape-image">
                        <img class="top dance" src="{{asset('template/assets/images/about/dotted-3.png')}}" alt="">
                    </div>
                    <br> <br>
                    <div class="desc pb-35">
                        Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.
                     </div>
                    <p class="margin-0 pb-15">
                        We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying.
                      </p>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Team Section Start -->
            
            <!-- Team Section End -->

            <!-- Process Section Start -->
            <div class="rs-process style2 pt-120 pb-120 md-pt-80 md-pb-73">
                <div class="container">
                    <div class="sec-title2 text-center mb-45">
                        <span class="sub-text style-bg">Processus</span>
                        <h2 class="title title2">
                           Notre processus de travail
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{asset('template/assets/images/process/1.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">E-commande</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 md-mb-50">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{asset('template/assets/images/process/2.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title"> Suivit </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{asset('template/assets/images/process/3.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">Choix</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="addon-process">
                                <div class="process-wrap">
                                    <div class="process-img">
                                        <img src="{{asset('template/assets/images/process/4.png')}}" alt="">
                                    </div>
                                    <div class="process-text">
                                        <h3 class="title">Facturation</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Process Section End -->

            <!-- Pricing section start -->
           
            <!-- Pricing section end -->

            <!-- Counter Section Start -->
            <div class="rs-contact-wrap bg5 pt-120 pb-390 md-pt-80">
               <div class="container">
                 <div class="sec-title2 text-center mb-30">
                     <span class="sub-text style-bg white-color">Contact</span>
                     <h2 class="title white-color">
                        Demandez des informations supplémentaire
                     </h2>
                 </div>           
               </div>
            </div>
            <!-- Counter Section End -->

            <!-- Video Section End -->
            <div class="rs-video-wrap style2 inner pb-120 md-pb-80">
                <div class="container">
                    <div class="row margin-0 gray-color">
                        <div class="col-lg-6 padding-0">
                            <div class="video-item">
                                <div class="rs-videos">
                                    
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="rs-requset">                              
                                <div id="form-messages"></div>
                                <form id="contact-form" method="post" action="mailer.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="website" name="website" placeholder="Your Website" required="">
                                            </div>
                                      
                                            <div class="col-lg-12 mb-45">
                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-part">
                                          <input class="submit sub-small" type="submit" value="Submit Now">
                                        </div> 
                                    </fieldset>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Video Section End -->

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