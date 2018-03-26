@extends('layout.app')
@section('content')
  
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>Single <span>Cause</span></h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Causes</a></li>
                <li>Single Cause</li>
            </ul>
        </div>
    </div>
</section>

<section class="single-cause">
	<div class="container">
		<figure class="image-box">
			<img src="images/causes/s1.jpg" alt="" />
		</figure>
		<div class="content-box">
			<div class="icon-box">
				<img src="images/causes/1.png" alt="" />
			</div>
			<div class="title">
				<h2>Helping for <span>education</span> to syrian child & <span>food planting</span></h2>
			</div>
			<div class="text">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making  like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like as their default model text.</p>
			</div>
			<div class="progress-levels">
				<div class="progress-box">
					<div class="inner">
						<div class="bar">
							<div class="bar-innner">
								<div class="bar-fill" data-percent="45">
									<span class="percent">45%</span>
							   </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="donate-price"><b>$44,210 </b>&nbsp; Raised of  <span> $99,541 </span> Goal</div>
			
			<div class="donate-amount">
				<div class="title">
					<h5><i class="fa fa-arrow-circle-right"></i>Enter an amount to Donate</h5>
				</div>
				<div class="default-form-area">
					<form id="contact-form" name="contact_form" class="default-form style-three" action="http://perconcept.muzahid.com/Charity-sympathy/sendmail.php" method="post">
						<div class="row clearfix">
							<div class="col-md-12 col-sm-12 col-xs-12">
														
								<div class="form-group style-three">
									<input type="text" name="form_name" class="form-control" value="" placeholder="$20" required="">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-three">
									<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
									<button class="thm-btn" type="submit" data-loading-text="Please wait...">Donate now</button>
								</div>
							</div>   

						</div>
					</form>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="ship-same-address">
						<span>Make this as a monthly gift</span>
					</label>
				</div> 
				
			</div>
			
			<div class="clients-section style-two">
				
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
		</div>
	</div>
</section>
@endsection