@extends('layout.app')
@section('content')
  
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>single <span>event</span></h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="event.html">Event</a></li>
                <li>Single Event</li>
            </ul>
        </div>
    </div>
</section>

<section class="single-event">
	<div class="container">
		<figure class="image-box">
			<img src="images/event/8.jpg" alt="" />
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
			
			<div class="donate-price"><b>$44,210 </b>&nbsp; Raised of  <span> $99,541 </span> Goal</div>
			
			<section class="countdown">
				<div class="container">
					
					<div class="simply-countdown simply-countdown-one"></div>
				</div>
			</section>
			
			
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