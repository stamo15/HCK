@extends('layout.app')
@section('content')
  
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="fade">
                <img src="images/slider/2...jpg"  alt="" width="1920" height="882" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="top" data-voffset="300" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
						<h4>Thousand of children in Cote d'Ivoire are in extreme need!</h4>
                        <h1>help the <span>poor</span> kids</h1>
                        <p>Helping one of these kids in need today<br>is similar to contibuting to a better future for Cote d'Ivoire and Africa at large. </p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="top" data-voffset="500" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="{{ route('get-involved')}}">Get involved now</a>     
                        </div>
                    </div>
                </div>
               
            </li>
			
			<li data-transition="fade">
                <img src="images/slider/3..jpg"  alt="" width="1920" height="882" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
               
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="" 
                    data-y="center" data-voffset="-70" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-responsive_offset="on"
                    data-start="500">
                    <div class="slide-content-box center">
                        <h4>Thousand of children in Cote d'Ivoire are in extreme need!</h4>
                        <h1>help the <span>poor</span> kids</h1>
                        <p>Be part of something that matters by contributing to the betterment<br>of the lives of these children who are struggling on a daily basis.</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="80" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="{{ route('get-involved')}}">Get involved now</a>     
                        </div>
                    </div>
                </div>

            </li>
            
            <li data-transition="fade">
                <img src="images/slider/4.jpg"  alt="" width="1920" height="882" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                
                <div class="tp-caption tp-resizeme"
                    data-x="center" data-hoffset="" 
                    data-y="center" data-voffset="-70" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"  
                    data-responsive_offset="on"
                    data-start="500">
                    <div class="slide-content-box center">
                        <h4>Thousand of children in Cote d'Ivoire are in extreme need!</h4>
                        <h1>help the <span>poor</span> kids</h1>
                        <p>Life is not going easy on many children in Cote d'Ivoire, <br>so join us and contribute in making it easier for these children to at least meet basic needs. </p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="center" data-hoffset="0" 
                    data-y="center" data-voffset="80" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="{{ route('get-involved')}}">Get involved now</a>     
                        </div>
                    </div>
                </div>

            </li>
            
           
        </ul>
    </div>
</section>

<section class="urgent-cause">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-12 col-md-offset-1">
                <div class="urgent-cause-slide">
                    <div class="item">

                        <div class="clearfix bg-area">
                            <figure class="img-box">
                                <img src="{{asset('images/feature/1.jpg')}}" alt="">
                            </figure>
                            

                            <div class="content">
                                <h4><span>food</span> & <span>clothing</span>are basic needs thatwe are trying to fulfill for kids in Cote d'Ivoire</h4>


                            </div>
                        </div>
                            
                    </div>
                    <div class="item">
                        <div class="clearfix bg-area">
                            <figure class="img-box">
                                <img src="{{asset('images/feature/edu.png')}}" alt="">
                            </figure>
							
                            <div class="content">
                                <h4>We believe that every Ivorian child deserves a good<span> education</span> so we try to provide school kits for the least fortunate ones.</h4>
                                
                            </div>
                        </div>  
                    </div>
                    <div class="item">
                        <div class="clearfix bg-area">
                            <figure class="img-box">
                                <img src="{{asset('images/feature/1..jpg')}}" alt="">
                            </figure>
							
                            <div class="content">
                                <h4>We worry about <span>healthcare</span> for the children so we try to fight taboo related issues especially against girls</span></h4>
                                
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="our-missions" style="background-color: #80808021;">
	<div class="container">
		<div class="section-title">
            <h1><span>Help Kids in Cote d'Ivoire</span></h1>
            <div class="item-list text-justify">
                <p style="font-size: 1.5em;">Help Kids in  Côte d'ivoire is a Non-profit organization based in Abidjan,Cote d’Ivoire that started with a goal aiming to Help 
                    kids in villages and orphanages in Africa.We see that in many areas of  Côte d’ivoire children aren’t  provided or can’t afford
                    the basic healthcare and educational  supplies due to the parents paying for their education. 
                    Help Kids in Côte d’ivoire (aide les enfants a Côte d’ivoire) has taken action to provide local kids in villages and orphanages
                    with  providing them with basic school and health care supplies.We feel as if Native Ivorian people we should help give back to 
                    our country. 
                </p>
            </div>
			
        </div>
		<div class="item-box">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="item">
						<div class="image-box">
							<img src="images/missions/1.png" alt="" />
						</div>
						<div class="content-box">
							<h2>Donations</h2>
							<p>We receive donations of different kinds be it food, clothes, school supplies, etc. If you want to make a donation, please reach out to us.</p>
						</div>
						<div class="link"><a href="{{route('contact')}}" class="thm-btn style-2">Contact us</a></div>
					</div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
					<div class="item">
						<div class="image-box">
							<img src="images/missions/3.png" alt="" />
						</div>
						<div class="content-box">
							<h2>fundraising</h2>
							<p>We are also fundraising, and the money is to serve the cause in making a better life for those children. You can donate through our GoFunnnnndMe link</p>
						</div>
						<div class="link"><a href="https://www.gofundme.com/helpkidsinafrica" class="thm-btn style-2">GoFundMe</a></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="item">
						<div class="image-box">
							<img src="images/missions/2.png" alt="" />
						</div>
						<div class="content-box">
							<h2>Give it back</h2>
							<p>Both the donations and the fundraising we receive is mostly used for children in villages and orphanages in order to hopefully prepare them for a brighter future</p>
						</div>
						<div class="link"><a href="{{route('contact')}}" class="thm-btn style-2">Contact us</a></div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section class="recent-causes">
	<div class="container">
		<div class="section-title">
            <h5>A bit about us</h5>
            <h1>Some of our <span>activities</span></h1>
			<p>These are some of the activities that we have taken part in this far. They range from receiving donations to distributing school kits to children. </p>
        </div>

        <div class="item-list" >
            <div class="row">
                <div class="column">
                    <script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        jssor_1_slider_init = function() {

                            var jssor_1_options = {
                            $AutoPlay: 1,
                            $SlideWidth: 720,
                            $ArrowNavigatorOptions: {
                                $Class: $JssorArrowNavigator$
                            },
                            $BulletNavigatorOptions: {
                                $Class: $JssorBulletNavigator$
                            }
                            };

                            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                            /*#region responsive code begin*/

                            var MAX_WIDTH = 980;

                            function ScaleSlider() {
                                var containerElement = jssor_1_slider.$Elmt.parentNode;
                                var containerWidth = containerElement.clientWidth;

                                if (containerWidth) {

                                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                    jssor_1_slider.$ScaleWidth(expectedWidth);
                                }
                                else {
                                    window.setTimeout(ScaleSlider, 30);
                                }
                            }

                            ScaleSlider();

                            $Jssor$.$AddEvent(window, "load", ScaleSlider);
                            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                            /*#endregion responsive code end*/
                        };
                    </script>
                    <style>
                        /*jssor slider loading skin spin css*/
                        .jssorl-009-spin img {
                            animation-name: jssorl-009-spin;
                            animation-duration: 1.6s;
                            animation-iteration-count: infinite;
                            animation-timing-function: linear;
                        }

                        @keyframes jssorl-009-spin {
                            from { transform: rotate(0deg); }
                            to { transform: rotate(360deg); }
                        }

                        /*jssor slider bullet skin 051 css*/
                        .jssorb051 .i {position:absolute;cursor:pointer;}
                        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
                        .jssorb051 .i:hover .b {fill-opacity:.7;}
                        .jssorb051 .iav .b {fill-opacity: 1;}
                        .jssorb051 .i.idn {opacity:.3;}

                        /*jssor slider arrow skin 051 css*/
                        .jssora051 {display:block;position:absolute;cursor:pointer;}
                        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                        .jssora051:hover {opacity:.8;}
                        .jssora051.jssora051dn {opacity:.5;}
                        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                    </style>
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/1.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/2.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/3.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/4.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/5.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/6.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/7.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/8.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/9.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/10.jpg')}}" />
                            </div>
                            <div data-p="137.50">
                                <img data-u="image" src="{{asset('images/img/11.jpg')}}" />
                            </div>
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
                </div>
            </div>
		</div>
	</div>
</section>



<!--start parallax-sec-one-->
<section class="parallax-sec-one">
    <div class="container">
		<div class="section-title">
			<h1>Get involved</h1>
			<h4>Join <span>us</span> today!</h4>
		</div>
		
		<div class="tp-caption tp-resizeme" 
                data-x="left" data-hoffset="15" 
                data-y="top" data-voffset="500" 
                data-transform_idle="o:1;"                         
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                data-start="2300" style="margin-left:38%;">
                <div class="slide-content-box">
                    <div class="button">
                        <a class="thm-btn" href="{{ route('get-involved')}}">join us today</a>     
                    </div>
                </div>
            </div>
	</div>
</section>
<!--end parallax-sec-one-->

@endsection