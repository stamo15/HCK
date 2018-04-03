@extends('layout.app')
@section('content')
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>Contact <span>us</span></h1>
        </div>
        <div class="text">
			<p>Please reach out to us by sending a message. You can also follow us on social media </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>

<section class="contact_details">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="fa fa-phone"></span>
                    </div>
                    <h4>Call us</h4>
                    <div class="text">
                        <p>Give us a phone call</p>
						<h5>+1 646-707-9947</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="fa fa-instagram"></span>
                    </div>
                    <h4>Instagram</h4>
                    <div class="text">
                        <p>Follow us Instagram</p>
						<h5>https://www.instagram.com/helpkidsin_afrique/</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="fa fa-facebook"></span>
                    </div>
                    <h4>Faceboof</h4>
                    <div class="text">
                        <p>Follow us on Facebook</p>
						<h5>https://www.facebook.com/HelpKidsInAfrique/?ref=aymt_homepage_panel</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="contact_us">
    <div class="container"> 
		<div class="section-title text-center">
			<h2>Leave us a message</h2>
		</div>
		<div class="default-form-area">
			<form id="contact-form" name="contact_form" class="default-form" action="http://perconcept.muzahid.com/Charity-sympathy/sendmail.php" method="post">
				<div class="row clearfix">
					<div class="col-md-6 col-sm-6 col-xs-12">
						
						<div class="form-group">
							<input type="text" name="form_name" class="form-control" value="" placeholder="Your Name" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Email" required="">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<input type="text" name="form_phone" class="form-control" value="" placeholder="Phone">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="form-group">
							<input type="text" name="form_subject" class="form-control" value="" placeholder="Subject">
						</div>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<textarea name="form_message" class="form-control textarea required" placeholder="Your Message...."></textarea>
						</div>
					</div>   
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
							<button class="thm-btn" type="submit" data-loading-text="Please wait...">send message</button>
						</div>
					</div>   

				</div>
			</form>
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