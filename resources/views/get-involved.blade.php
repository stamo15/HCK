@extends('layout.app')
@section('content')
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>Get involved <span>now</span></h1>
        </div>
        <div class="text">
			<p>Join us and make an impact by changing lives.</p>
		</div>
		<!-- <div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div> -->
    </div>
</section>

<br><br><br>
<section class="contact_us">
    <div class="container"> 
		<div class="section-title text-center">
			<h2>Please fill the form</h2>
            <br><br><br>
            <div class="text">
                <p>Fill this form below to indicate how you likee to be involved in our organization. Once you submit, we will reply to you within 1-2 days.</p>
            </div>
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
							<textarea name="reason" class="form-control textarea required" placeholder="Brief reason why you would like to join us..."></textarea>
						</div>
					</div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<textarea name="skills" class="form-control textarea required" placeholder="What do you think you would bring to Help Kids in Cote d'Ivoire ?(e.g Leadership, Event Skills)"></textarea>
						</div>
					</div>   
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
							<button class="thm-btn" type="submit" data-loading-text="Please wait...">Submit</button>
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