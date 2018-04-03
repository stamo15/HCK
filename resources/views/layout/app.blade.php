<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from perconcept.muzahid.com/Charity-sympathy/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Mar 2018 14:27:23 GMT -->
<head>
    <meta charset="UTF-8">
    <title>{{ "Help kids in Cote d'Ivoire || ".$title }}</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
	<link rel="stylesheet" href="{{asset('fonts/flaticon.css')}}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('images/favicon/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('images/favicon/favicon-16x16.png')}}" sizes="16x16">

</head>
<body>

<div class="boxed_wrapper">

<header class="top-bar">
    <div class="container">
        <div class="column left">
            <ul class="top-bar-text">
                <li><i class="icon fa fa-envelope"></i>helpkidsincotedivoire@gmail.com</li>
                <li><i class="icon fa fa-phone"></i>+1 646-707-9947</li>
            </ul>
        </div>
        <div class="column center">
            <ul class="social">                
                <li><a href="https://www.facebook.com/HelpKidsInAfrique/?ref=aymt_homepage_panel"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-instagram"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-go-fund-me"></i></a></li> -->
            </ul>
        </div>
        <div class="column right">
            <div class="tp-caption tp-resizeme" 
                data-x="left" data-hoffset="15" 
                data-y="top" data-voffset="500" 
                data-transform_idle="o:1;"                         
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                data-start="2300" style="position:relative;">
                <div class="slide-content-box">
                    <div class="button">
                        <a class="thm-btn" href="{{ route('get-involved')}}">join us today</a>     
                    </div>
                </div>
            </div>
        </div>
            

    </div>
</header>

<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="{{ route('index')}}"><img src="images/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-7 menu-column">
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                       <ul class="navigation clearfix">
                            <li class="dropdown @if($title == '')
                            {{'active'}}
                            @endif
                            "><a href="{{ route('index')}}">Home</a>
                                <ul>
                                    <li><a href="{{ route('index')}}">Home</a></li>
                                </ul>
                            </li>
                            <li class="dropdown @if($title == 'About us')
                            {{'active'}}
                            @endif
                            "><a href="{{ route('about')}}">about us</a>
                                <ul>
                                    <li><a href="{{ route('about')}}">About us</a></li>  
                                </ul>
                            </li>
                            
                            <!-- <li class="dropdown @if($title == 'Blog')
                            {{'active'}}
                            @endif"><a href="#"> blog </a>
                                <ul>  
                                    <li><a href="{{ route('blog-large')}}">Blog With Sidebar</a></li>
                                    <li><a href="{{ route('blog-details')}}">Blog Single Post</a></li>
                                 </ul>
                            </li>
                            <li class="dropdown @if($title == 'Shop')
                            {{'active'}}
                            @endif"><a href="#">pages</a>
                                <ul>
                                    <li><a href="{{ route('shop')}}">Shop</a></li>
									<li><a href="{{ route('shop-single')}}">Product Detail Page</a></li>
                                    <li><a href="{{ route('error')}}">404</a></li>
                                </ul>
                            </li> -->
                            <li class="@if($title == 'Get Involved')
                            {{'active'}}
                            @endif"><a href="{{ route('get-involved')}}">Get Involved</a></li>
                            <li class="@if($title == 'Contact Us')
                            {{'active'}}
                            @endif"><a href="{{ route('contact')}}">contact</a></li>
                        </ul>
                        <ul class="mobile-menu clearfix">

                            <li class="dropdown @if($title == '')
                            {{'active'}}
                            @endif"><a href="{{ route('index')}}">Home</a>
                                <ul>
                                    <li><a href="{{ route('index')}}">Home</a></li>
                                </ul>
                            </li>
                            <li class="dropdown @if($title == 'About Us')
                            {{'active'}}
                            @endif
                            "><a href="#">about us</a>
                                <ul>
                                    <li><a href="{{ route('about')}}">About us</a></li>  
                                </ul>
                            </li>
                            
                            
                            <li class="dropdown @if($title == 'Blog')
                            {{'active'}}
                            @endif
                            "><a href="#"> blog </a>
                                <ul>  
                                    <li><a href="{{ route('blog-large')}}">Blog With Sidebar</a></li>
                                    <li><a href="{{ route('blog-details')}}">Blog Single Post</a></li>
                                 </ul>
                            </li>
                            <li class="dropdown @if($title == 'Shop')
                            {{'active'}}
                            @endif"><a href="#">pages</a>
                                <ul>
                                    <li><a href="{{ route('shop')}}">Shop</a></li>
									<li><a href="{{ route('shop-single')}}">Product Detail Page</a></li>
                                    <li><a href="{{ route('error')}}">404</a></li>
                                </ul>
                            </li>
                            <li class="@if($title == 'Get Involved')
                            {{'active'}}
                            @endif"><a href="{{ route('get-involved')}}">Get Involved</a></li>
                            <li class="@if($title == 'Contact')
                            {{'active'}}
                            @endif"><a href="{{ route('contact')}}">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                        <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                       </div>
                   </div>
                </div>
                    
            </div>
        </div>
                

   </div> <!-- End of .conatiner -->
</section>
@yield('content')


<footer class="main-footer">
    
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container">

            <div class="section-title">
                <div class="image-box">
                    <img src="images/footer/fl.png" alt="">
                </div>
               
                <p>Help kids in Cote d'Ivoire</p>
            </div>


            <div class="row">
                <!--Big Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget information-widget">
                                <h3 class="footer-title">Information</h3>
                                
                                <div class="widget-content">
                                    <div class="text"><p>Help Kids in  Côte d'ivoire is a Non-profit organization based in Abidjan,Cote d’Ivoire that started with a goal aiming to Help 
                    kids in villages and orphanages in Africa.</p> </div>
                                    <ul class="contact-info">
                                        <li><span class="fa fa-envelope-o"></span> helpkidsincotedivoire@gmail.com</li>
                                        <li><span class="fa fa-phone"></span>+1 646-707-9947</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget works-widget">
                                <h3 class="footer-title">Causes we care about</h3>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li>
                                            <h5>Food and Clothing for all kids</h5>
                                             
                                        </li>
                                        <li>
                                            <h5>Education for children</h5>
                                             
                                        </li>
                                        <li>
                                            <h5>Marginalization due to taboo topics</h5>
                                             
                                        </li>
                                    </ul>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Big Column-->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row clearfix">
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget contact-widget">
                                <h3 class="footer-title">contact us</h3>
                                <div class="widget-content">
                                    <div class="default-form-area">
                                        <form id="contact-form2" name="contact_form" class="default-form style-two" action="http://perconcept.muzahid.com/Charity-sympathy/sendmail.php" method="post">
                                            <div class="row clearfix">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    
                                                    <div class="form-group style-two">
                                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Your name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group style-two">
                                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Your mail" required="">
                                                    </div>
                                                </div>
                                                
                                               
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group style-two">
                                                        <textarea name="form_message" class="form-control textarea required" placeholder="Text..."></textarea>
                                                    </div>
                                                </div>   
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group style-two">
                                                        <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                        <button class="thm-btn2" type="submit" data-loading-text="Please wait...">send<i class="fa fa-angle-right"></i></button>
                                                    </div>
                                                </div>   

                                            </div>
                                        </form>
                                    </div>
                                </div>
                               
                            </div>
                        </div>

                        <!--Footer Column-->

                        <!--Footer Column-->
                        <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-widget Instagram-widget">
                                <h3 class="footer-title">Instagram</h3>
                                    <div class="widget-content">
                                        <ul class="instagram">
                                            <li>
                                                <div class="img-holder">
                                                    <img src="{{asset('images/footer/1.png')}}" alt="Awesome Image">
                                                    <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                </div>
                                            </li>

                                                <li>
                                                    <div class="img-holder">
                                                        <img src="{{asset('images/footer/2.png')}}" alt="Awesome Image">
                                                        <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="img-holder">
                                                        <img src="{{asset('images/footer/3.png')}}" alt="Awesome Image">
                                                        <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <img src="{{asset('images/footer/4.png')}}" alt="Awesome Image">
                                                        <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <img src="{{asset('images/footer/5.png')}}" alt="Awesome Image">
                                                        <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="img-holder">
                                                        <img src="{{asset('images/footer/6.png')}}" alt="Awesome Image">
                                                        <div class="overlay">
															<div class="box">
																<div class="content">
																	<a href="https://www.instagram.com/helpkidsin_afrique/"><i class="fa fa-link"></i></a>
																</div>
															</div>
														</div>
                                                    </div>
                                                </li>
                                               
                                            </ul>
                                            
                                        </div>
                                        
                                    </div>
                                </div> 

                    </div>
                </div>
                
             </div>
         </div>
     </div>
     
     <!--Footer Bottom-->
     <div class="footer-bottom">
        <div class="container">
            <div class="text">
                <p><span>helpkidsincotedivoire</span>@2017. All Right Reserved</p>
            </div>
        </div><!-- /.container -->
    </div>
     
</footer>

<!-- Scroll Top Button -->
    <button class="scroll-top tran3s color2_bg">
        <span class="fa fa-angle-up"></span>
    </button>
    <!-- pre loader  -->
    <div class="preloader"></div>


    <!-- jQuery js -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- jQuery ui js -->
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- jQuery validation -->
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>

    <!-- mixit up -->
    <script src="{{asset('js/wow.js')}}"></script>
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
    <script src="{{asset('js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
   

    <!-- revolution slider js -->
    <script src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('js/revolution.extension.video.min.js')}}"></script>

    <!-- fancy box -->
    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('js/jquery.polyglot.language.switcher.js')}}"></script>
    <script src="{{asset('js/nouislider.js')}}"></script>
    <script src="{{asset('js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="{{asset('js/jquery.appear.js')}}"></script>
    <script src="{{asset('js/jquery.countTo.js')}}"></script>
    <script src="{{asset('js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('js/imagezoom.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script> 
    <script src="{{asset('js/isotope.js')}}"></script>   

 <script src="{{asset('js/simplyCountdown.min.js')}}"></script>

    <script id="map-script" src="{{asset('js/default-map.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</div>
    
</body>

<!-- Mirrored from perconcept.muzahid.com/Charity-sympathy/about')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Mar 2018 14:27:25 GMT -->
</html>