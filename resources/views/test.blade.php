<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Camme - Centrale d'achat des médicaments et matériels essentiels</title>

<!-- Stylesheets -->
<link href="{{asset('template/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('template/css/style.css')}}" rel="stylesheet">
<link href="{{asset('template/css/responsive.css')}}" rel="stylesheet">

<!-- Fav Icons -->
<link rel="shortcut icon" href="{{asset('template/images/favicom.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('template/images/favicom.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
    
    <!-- pre loader  -->
    <div class="preloader"></div>

    <!-- main header -->
    
    <header class="main-header">

        <!-- header top -->
        <div class="header-top">
            <div class="container">
                <div class="outer-box clearfix">
                    <!--Top Left-->
                    <div class="top-left float-sm-left">
                        <ul class="topbar-info">
                            <li>
                                <a href="tel:+253 21 35 32 56"><i class="fa fa-phone"></i> +253 21 35 32 56</a>
                            </li>
                            <li>
                                <a href="mailto:camme@camme-dj.com"><i class="fa fa-envelope"></i> camme@camme-dj.com</a>
                            </li>
                        </ul>   
                    </div>
                    <!--Top Right-->
                    <div class="top-right float-sm-right">
                        <div class="social-links clearfix">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            <a href="#"><span class="fab fa-pinterest"></span></a>
                            <a href="#"><span class="fab fa-skype"></span></a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    
        <!-- Header upper -->
        <div class="header-upper">
            <div class="container clearfix">
                    
                <div class="float-left logo-outer">
                <div class="logo"><a href="{{ url('/')}}"><img src="{{asset('template/images/logo2.png')}}" height="50px" width="300px" alt="" title=""></a></div>
                </div>
                
                <div class="float-right upper-right clearfix">
                    
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li class="dropdown"><a href="#">Qui somme nous ?</a>
                                        <ul>
                                            <li><a href="{{ url('/mot_du_directeur') }}">Mot du directeur</a></li>
                                            <li><a href="{{ url('/apropos') }}">A propos</a></li>
                                            <li><a href="{{ url('/organisation') }}">Organisation</a></li>
                                        </ul>
                                    </li>
                                                                     
                                    <li><a href="{{ url('/juridique') }}">Text juridique</a></li>
                                  
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                        <div class="menu-right-content">
                            <div class="link-btn"><a href="https://templates.envytheme.com/drodo/default/index-3.html" class="theme-btn btn-style-two" >E-Commande </a></div>
                        </div>
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <!--End Header Upper-->
    
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="clearfix">
                    <!--Logo-->
                    <div class="logo float-left">
                        <a href="{{ url('/')}}l" class="img-responsive"><img height="50" width="300px" src="{{asset('template/images/logo2.png')}}" alt="" title=""></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li class="dropdown"><a href="#">Qui somme nous ?</a>
                                        <ul>
                                            <li><a href="{{ url('/mot_du_directeur') }}">Mot du directeur</a></li>
                                            <li><a href="{{ url('/apropos') }}">A propos</a></li>
                                            <li><a href="{{ url('/organisation') }}">Organisation</a></li>
                                        </ul>
                                    </li>
                                    
                                   
                                    <li><a href="{{ url('/juridique') }}">Text juridique</a></li>
                                  
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>
    

    
    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="main-slider-carousel owl-carousel owl-theme">
            
            <div class="slide" style="background-image:url({{asset('template/images/main-slider/s2.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content mr-15">
                                <h1>Coronavirus shows the disease<br> within 14 days of entering<br> the body.</h1>
                                <p>Consectetur adipisicing elit sed do ei usmod tempor incididunt.<br> Enim minim veniam, quis nostrud exer citation ullamco laboris<br> commodo conse inquat duis aute irure dolor.</p>
                                <div class="link-box">
                                    <a href="service.html" class="theme-btn btn-style-two">Our Services</a>
                                    <a href="{{url('/contact')}}" class="theme-btn btn-style-eight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="image">
                                <img src="{{asset('template/images/main-slider/sr-4.png')}}" alt="Slider Right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="slide" style="background-image:url({{asset('template/images/main-slider/s1.jpg')}})">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-8">
                            <div class="content mr-15">
                                <h1>Coronavirus shows the disease<br> within 14 days of entering<br> the body.</h1>
                                <p>Consectetur adipisicing elit sed do ei usmod tempor incididunt.<br> Enim minim veniam, quis nostrud exer citation ullamco laboris<br> commodo conse inquat duis aute irure dolor.</p>
                                <div class="link-box">
                                    <a href="service.html" class="theme-btn btn-style-two">Our Services</a>
                                    <a href="{{url('/contact')}}" class="theme-btn btn-style-eight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="image">
                                <img class="rotate-me" src="{{asset('template/images/main-slider/sr-3.png')}}" alt="Slider Right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image:url({{asset('template/images/main-slider/s3.jpg')}})">
                <div class="container">
                   <div class="row">
                        <div class="col-lg-8">
                            <div class="content mr-15">
                                <h1>Coronavirus shows the disease<br> within 14 days of entering<br> the body.</h1>
                                <p>Consectetur adipisicing elit sed do ei usmod tempor incididunt.<br> Enim minim veniam, quis nostrud exer citation ullamco laboris<br> commodo conse inquat duis aute irure dolor.</p>
                                <div class="link-box">
                                    <a href="service.html" class="theme-btn btn-style-two">Our Services</a>
                                    <a href="{{url('/contact')}}" class="theme-btn btn-style-eight">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="image">
                                <img src="{{asset('template/images/main-slider/sr-6.png')}}" alt="Slider Right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Main Slider-->

    <!-- About -->
    <section class="about-section sp-two">
        <div class="rotate-image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content-block">
                        <h3>Directeur Général Dr. <span>Ahmed houssein Miguel</span></h3>
                        <div class="text mb-40">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do ei usmod tempor incididunt.enim minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex commodo conse inquat duis aute irure dolor.</p>
                            <p> Quis nostrud exer citation ullamco laboris nisi ut aliquip ex commodo conse inquat duis aute irure dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do ei usmod tempor incididunt.</p>
                        </div>
                        <div class="link-btn mb-30"><a href="{{ url('/mot_du_directeur')}}" class="theme-btn btn-style-two small-btn">En savoir plus</a></div>
                    </div>                        
                </div>
                <div class="col-lg-6">
                    <div class="about-image-block about-img">
                        <div class="inner-box">
                            <div class="image wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                                <img class="float-bob-y" src="{{asset('template/images/resource/about.jpg')}}" alt="about">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- prevention section -->
   
    <!--info section-->
    <!--info section end-->


    <!-- Parallax section -->
    <section class="parallax-section" style="background-image:url({{asset('template/images/background/back.png')}});">
        <div class="rotate-image">
        </div>
        <div class="container">
            <h3> <font color="White"> Depuis la fin de l’année 2016, la Centrale d’Achat des Médicaments et Matériels Essentiels (CAMME) s’est engagée dans d’importantes reformes axées sur l’accroisement des performances.  </font></h3>
       
        </div>
    </section>

    <section class="latest-blog sp-two">
        <div class="rotate-image">
            <img class="rotate-me" src="{{asset('template/images/resource/rt.png')}}" alt="">
        </div>
        <div class="container">
            <div class="sec-title centered">
                <h4>Actualités</h4>
                <h1>Derniere actualités</h1>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image"><a href="blog-details.html"><img src="images/resource/b1.jpg" alt=""></a></div>
                        <div class="date">17 Mar, 2020</div>
                        <div class="lower-content">
                            <a href="blog-details.html"><h4>Do not delay if the symptoms appear</h4></a>
                            <div class="text">Excepteur sint occaecat cupidatat  proident sunt culpa qui officia derunt mollit anmlab rum. Sed perspiciatis unde.</div>
                            <div class="link"><a href="blog-details.html" class="theme-btn">Read More <span class="icon-right-arrow2"></span></a></div>
                        </div>
                    </div>
                </div>
                <!-- end column -->
                <div class="col-lg-4 col-md-6 col-sm-12 news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image"><a href="blog-details.html"><img src="images/resource/b2.jpg" alt=""></a></div>
                        <div class="date">17 Mar, 2020</div>
                        <div class="lower-content">
                            <a href="blog-details.html"><h4>Use masks to avoid Coronaviruses</h4></a>
                            <div class="text">Excepteur sint occaecat cupidatat  proident sunt culpa qui officia derunt mollit anmlab rum. Sed perspiciatis unde.</div>
                            <div class="link"><a href="blog-details.html" class="theme-btn">Read More <span class="icon-right-arrow2"></span></a></div>
                        </div>
                    </div>
                </div>
                <!-- end column -->
                <div class="col-lg-4 col-md-6 col-sm-12 news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image"><a href="blog-details.html"><img src="images/resource/b3.jpg" alt=""></a></div>
                        <div class="date">17 Mar, 2020</div>
                        <div class="lower-content">
                            <a href="blog-details.html"><h4>Experienced physicians provide medical care</h4></a>
                            <div class="text">Excepteur sint occaecat cupidatat  proident sunt culpa qui officia derunt mollit anmlab rum. Sed perspiciatis unde.</div>
                            <div class="link"><a href="blog-details.html" class="theme-btn">Read More <span class="icon-right-arrow2"></span></a></div>
                        </div>
                    </div>
                </div>
                <!-- end column -->
            </div>
        </div>
    </section>
    <!-- Our Team -->
    <section class="our-team sp-two">
        <div class="container">
            <!-- Sec title -->
            <div class="sec-title centered">
                <h4>Notre equipe</h4>
                <h1>Nos experts</h1>
            </div>
            <div class="row">
                <!-- Team member -->
                <div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <a href="#"><img src="{{asset('template/images/resource/t1.jpg')}}" alt=""></a>
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Dr. Robert Muhib</a></h4>
                            <div class="designation">Seneor Consultant</div>
                            
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                        <div class="image">
                            <a href="#"><img src="{{asset('template/images/resource/t2.jpg')}}" alt=""></a>
                            
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Dr. Denial Firoz</a></h4>
                            <div class="designation">Seneor Consultant</div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team member -->
                <div class="team-block-one col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <a href="#"><img src="{{asset('template/images/resource/t3.jpg')}}" alt=""></a>
                            
                        </div>
                        <div class="lower-box">
                            <h4><a href="#">Dr. Fahima Akon</a></h4>
                            <div class="designation">Virus Expert</div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url(images/background/bg2.jpg);">
        <div class="container">
            <div class="wrapper-box">
                <h1>Pour plus d'information sur la CAMME </h1>
                <div class="read-more"><a href="{{url('/contact')}}" class="theme-btn btn-style-five">Contacter nous</a></div>
            </div>
        </div>
    </div>




    <section class="services sp-two">
        <div class="container-fluid">
            <div class="sec-title centered">
                <h4>Catalogue</h4>
                <h1>Nos articles</h1>
            </div>
         <div class="five-item-carousel owl-carousel wol-theme owl-nav-none owl-dot-style-one">
                @foreach ($article as $row )      
                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset('storage/'.$row->image)}}" alt=""> 
                        </figure>
                        <div class="service-content">
                            <h3><a href="#">{{$row->titre}}</a></h3>
                            <div class="text">({{$row->contite}})</div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>

        </div>
    </section>


   

    

    <!-- latest blog -->
   
    
    
    <!--Main Footer-->
    <footer class="main-footer" style="background-image:url({{asset('template/images/background/s1.png')}});">
        <div class="border-img">
            <img src="{{asset('template/images/resource/footer-b.png')}}" alt="">
        </div>
        <div class="rotate-image">
        </div>
        <div class="container">
            <div class="row clearfix">

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-8 col-md-6">
                            <div class="footer-widget logo-widget">
                                <div class="footer-logo"><a href="{{url('/')}}"><img height="100px" width="150px"  src="{{asset('template/images/lolo.png')}}" alt=""></a></div>
                                <div class="widget-content">
                                    <div class="text"> Consectetur adipisicing elit sed do ei usmod tempor incididunt.enim minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip
                                    </div>
                                    
                                    <ul class="social-icon-one">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-4 col-md-6">
                            <div class="footer-widget links-widget">
                                <h2>Quick links</h2>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="{{url('/juridique')}}">Text Juridique</a></li>
                                        <li><a href="{{url('/organisation')}}">Organisation</a></li>
                                        <li><a href="{{url('/motdudirecteur')}}">Mot du directeur</a></li>
                                        <li><a href="{{url('/apropos')}}">A propos </a></li>
                                        <li><a href="{{url('/contact')}}">Contact </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Big Column-->
                <div class="big-column col-lg-6 col-md-12">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6">
                            <h2>Actualite</h2>
                            <!--Latest News-->
                            <div class="posts-widget">
                                <div class="posts">
                                   @foreach ($Actualite as $row)
                                       
                                    <div class="post">
                                        <div class="desc-text"><a href="/actualite/{{$row->id}}">{{$row->titre}}</a></div>
                                        <div class="time">{{date('d-m-Y', strtotime($row->date))}}</div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        
                      
                        
                    </div>
                </div>
                    
            </div>

        </div>
        

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="copyright">&copy; 2020 CAMME. Par <a href="https://www.facebook.com/Star-Technologie-101118741978898" target="_blank"> <font color='white'> <b> <i> Star technologie </i></b></font></a></div>
        </div>
    </footer>
    <!--End Main Footer-->

    <!-- start appointment popup-->
    <div class="modal fade appointment" id="appointment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="appointment-inner">
                    
                    <form id="appointment-form" name="appointment_form" class="appointment-form" action="#" method="post">
                        <div class="column">        
                            <div class="form-group">
                                <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-group">
                                <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-group">
                                <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-group">
                                <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                            </div>
                        </div> 
                        <div class="column">
                            <div class="form-group">
                                <input type="date" name="date" class="form-control" value="" placeholder="Date">
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-group">
                                <input type="time" name="time" class="form-control" value="" placeholder="Time">
                            </div>
                        </div>                                       
                        <div class="contact-section-btn">
                            <div class="form-group style-two m-0">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Appointment Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end appointment popup-->


</div>
<!--End pagewrapper--> 

<!-- Scroll Top Button -->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</button>
    

<!-- jequery plugins -->

<script src="{{asset('template/js/jquery.js')}}"></script>
<script src="{{asset('template/js/popover.js')}}"></script>
<script src="{{asset('template/js/bootstrap.min.js')}}"></script>

<script src="{{asset('template/js/wow.js')}}"></script>
<script src="{{asset('template/js/owl.js')}}"></script>
<script src="{{asset('template/js/validate.js')}}"></script>
<script src="{{asset('template/js/mixitup.js')}}"></script>
<script src="{{asset('template/js/isotope.js')}}"></script>
<script src="{{asset('template/js/appear.js')}}"></script>
<script src="{{asset('template/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('template/js/jquery.background-video.js')}}"></script>
<script src="{{asset('template/js/jquery.mCustomScrollbar.min.js')}}"></script>

<script src="{{asset('template/js/script.js')}}"></script>

</body>

</html>