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
                                <a href="tel:+1 111 222 888"><i class="fa fa-phone"></i> +1 111 222 888</a>
                            </li>
                            <li>
                                <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"></i> info@yourmail.com</a>
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
                    <div class="logo"><a href="{{ url('/') }}"><img height="100px" width="150px" src="{{asset('template/images/lolo.png')}}" alt="" title=""></a></div>
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
                                    <li class="dropdown"><a href="{{ url('/') }}">Home</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown current"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Medical Team</a></li>
                                            <li><a href="faq.html">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="prevention.html">Prevention</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="covid-19.html">Covid-19</a></li>
                                            <li><a href="error.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-1.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Classic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                        <div class="menu-right-content">
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-two" data-toggle="modal" data-target="#appointment">Appointment</a></div>
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
                        <a href="{{ url('/') }}" class="img-responsive"><img height="100px" width="150px" src="{{asset('template/images/lolo.png')}}" alt="" title=""></a>
                    </div>
                    
                    <!--Right Col-->
                    <div class="right-col float-right">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="{{ url('/') }}">Home</a>
                                        <ul>
                                            <li><a href="{{ url('/') }}">Homepage One</a></li>
                                            <li><a href="index-2.html">Homepage Two</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown current"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Medical Team</a></li>
                                            <li><a href="faq.html">FAQ's</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="prevention.html">Prevention</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li><a href="covid-19.html">Covid-19</a></li>
                                            <li><a href="error.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog-1.html">Blog Grid</a></li>
                                            <li><a href="blog-2.html">Blog Classic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
                    
                
            </div>
        </div>
        <!--End Sticky Header-->
    </header>


    @yield('content')

    
<!-- jequery plugins -->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/popover.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/wow.js')}}"></script>
<script src="{{asset('js/owl.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/mixitup.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/appear.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.js')}}"></script>
<script src="{{asset('js/jquery.background-video.js')}}"></script>
<script src="{{asset('js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('js/jquery.bxslider.js')}}"></script>

<script src="{{asset('template/js/script.js')}}"></script>

</body>

</html>