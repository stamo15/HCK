@extends('layout.app')
@section('content')
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>Contact <span>us</span></h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
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
                        <span class="fa fa-object-ungroup"></span>
                    </div>
                    <h4>Drop Us A Line</h4>
                    <div class="text">
                        <p>Business standards services compliant. Users without extensible costs.</p>
						<h5>hello@charity.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="fa fa-user"></span>
                    </div>
                    <h4>Commercial</h4>
                    <div class="text">
                        <p>Business standards services compliant. Users without extensible costs.</p>
						<h5>commercial@charity.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item center">
                    <div class="icon_box">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <h4>Visit Our Office</h4>
                    <div class="text">
                        <p>262 Milacina Mrest Street, Behansed, Paris, France</p>
						<h5>(+86) 6 888 888</h5>
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
							<input type="email" name="form_email" class="form-control required email" value="" placeholder="Your Mail" required="">
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
	<div class="home-google-map">
		<div 
			class="google-map" 
			id="contact-google-map" 
			data-map-lat="36.170043" 
			data-map-lng="-115.144622" 
			data-icon-path="images/logo/map-marker.png"
			data-map-title="Chester"
			data-map-zoom="14" >
		</div>
	</div>
</section>

<section class="clients-section style-two">
    <div class="container">
        <div class="clients-carousel">
			<div class="item">
				<div class="image-box">
					<img src="images/clients/1.png" alt="">
				</div>
			</div>

			<div class="item">
				<div class="image-box">
					<img src="images/clients/2.png" alt="">
				</div>
			</div>

			<div class="item">
				<div class="image-box">
					<img src="images/clients/3.png" alt="">
				</div>
			</div>

			<div class="item">
				<div class="image-box">
					<img src="images/clients/2.png" alt="">
				</div>
			</div>
        </div>
    </div>  
</section>
@endsection