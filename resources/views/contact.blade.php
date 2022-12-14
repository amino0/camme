
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
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li class="dropdown"><a href="#">Qui somme nous ?</a>
                                        <ul>
                                            <li><a href="{{ url('/motdudirecteur') }}">Mot du directeur</a></li>
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
                            <div class="link-btn"><a href="{{ url('/login') }}" class="theme-btn btn-style-two" >E-commande</a></div>
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
                                    <li><a href="{{ url('/') }}">Accueil</a></li>
                                    <li class="dropdown"><a href="#">Qui somme nous ?</a>
                                        <ul>
                                            <li><a href="{{ url('/motdudirecteur') }}">Mot du directeur</a></li>
                                            <li><a href="{{ url('/apropos') }}">A propos</a></li>
                                            <li><a href="{{ url('/organisation') }}">Organisation</a></li>
                                        </ul>
                                    </li>
                                    
                                   
                                    <li><a href="{{ url('/juridique') }}">Text juridique</a></li>
                                  
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                       </div>
                   </div>
                       
                   
               </div>
           </div>
           <!--End Sticky Header-->
       </header>
    
    <!-- Page title -->
    
        <section class="contact-section sp-two">
            <div class="rotate-image">
                <img class="rotate-me" src="images/resource/testi.png" alt="">
            </div>
            <div class="container">
                <div class="contact-info">
                    <div class="sec-title centered">
                        <h4>Nous contacter</h4>
                        <h1>Information</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block">
                                <h5>Address</h5>
                                <div class="text"> <b>Adresse :</b> avenue yourie gagarine <br>
                                    <b>Rue:</b>    abdoulkader waberie</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block">
                                <h5>Email</h5>
                                <div class="text"><a href="mailto: camme@camme-dj.com"> camme@camme-dj.com</a></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="contact-info-block">
                                <h5>Phone</h5>
                                <div class="text"><a href="tel:+253 21 35 32 56"><b>Tel: </b>+253 21 35 32 56</a></div>
                                <div class="text"><a href="tel:+253 21 35 66 04"><b>Fax: </b>+253 21 35 66 04</a></div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="default-form-area">
                    <div class="sec-title centered mb-20">
                        <h1>Formulaire de contact </h1>
                    </div>
                    <form id="contact-form" name="contact_form" class="contact-form" action="https://muzaddidul.com/Corola/inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 column">        
                                <div class="form-group">
                                    <input type="text" name="nom" class="form-control" value="" placeholder="votre nom" required="">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Votre Email" required="">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required" placeholder="Message..."></textarea>
                                </div>
                            </div>                                            
                        </div>
                        <div class="contact-section-btn center">
                            <div class="form-group style-two">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-two" type="submit" data-loading-text="Please wait...">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End form -->
            </div>
        </section>
    
    <!-- Call to Action -->
    <div class="call-to-action" style="background-image:url({{asset('template/images/background/bg2.jpg')}});">
        <div class="container">
            <div class="wrapper-box">
                <h1>Contacter nous pour plus d'information de la
                    CAMME</h1>
                <div class="read-more"><a href="{{url('/contact')}}" class="theme-btn btn-style-five">Contacter nous</a></div>
            </div>
        </div>
    </div>

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
<script src="{{asset('template/js/jquery.bxslider.js')}}"></script>

<script src="{{asset('template/js/script.js')}}"></script>

</body>

</html>