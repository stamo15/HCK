@extends('layout.app')
@section('content')
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>about <span>us</span></h1>
        </div>
        <div class="text">
			<p>
			Help Kids in Cote d'Ivoire aims to provide basic needs such as food, 
				clothing and education to children in Cote d'Ivoire. We also focus on helping girls who are a marginalized 
				gender in the country through a program that allows them to raise taboo issues and we provides sustainable solutions.
			</p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li>about</li>
            </ul>
        </div>
    </div>
</section>

<section class="two-column style-two">
	<div class="container">
		<div class="section-title">
		<h5>We do it for a noble cause</h5>
            <h1>what we  <span>do</span></h1>
		</div>
		<div class="item-list text-justify">

		<p style="font-size: 1.5em;">Help Kids in Côte d’ivoire is focusing on the education and healthcare needs in Africa by teaming up with Elizabeth 
			Soto-Cisse ( Goodwill Ambassador of Folon) to provide school and  and medical supplies to local villages in the Folon 
			Region. In 2016/2017 our focus was  about  approaching 2016- 2017 on Education and Health Care of Kids in Côte d’ivoire. 
			To do so, a container of goods ( school book, computers, medical facilities etc.) have been shipped from the USA to Cote d’Ivoire. 
			This allowed to help many kids to go to school and providing the heath assistance.Now we are working on more programs to help 
			improve these kids life condition and unleash their full potentials in order to thrive in a professional career and impact 
			positively the country in a nearly future.</p>
		</div>
	</div>
</section>

<section class="two-column style-two">
	<div class="container">
		<div class="section-title">
		<h5>The causes we fight for</h5>
            <h1>Who we  <span>are</span></h1>
		</div>

		<div class="item-list">
			<div class="row">
				<div class="column col-md-7 col-sm-7">
					<div class="image-box">
						<img src="{{asset('images/img/5.jpg')}}" alt="" />
					</div>
				</div>
				<div class="column col-md-4 col-sm-4 ">
				<p style="font-size: 1.5em;text-align: justify;">The Help Kids in Côte d’ivoire is focusing on the education and healthcare needs in Africa by teaming up 
				with Elizabeth Soto-Cisse 
				to provide school supplies and medical supplies to local villages in the Folon Region. 
				We now focused  in  approaching 2016- 2017 on Education and Health Care of Kids in Côte d’ivoire.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="two-column style-two">
	<div class="container">
		<div class="section-title">
			<h5>How far we have come</h5>
			<h1>Our <span>history</span></h1>
		</div>
		<div class="item-list">
			<div class="row justify-content-between">
				<div class="column col-md-6 col-sm-6">
					<p style="font-size: 1.5em;">The Help Kids in Côte d’ivoire, and non-profit organization started by Mamady Deen Ballo back in 2015 while still a freshman in High School, 
						experienced a touching experience when she traveled to  Côte d’ivoire and saw  that she things that she took for granted. 
						She then came back to US and organized an International Trip to  Côte d’ivoire with her school that was canceled due to the attack on Grand Bassam. 
						Ahead of time her and fellow classmates and teacher Joni schultheiss sent a shipping container filled with school supplies in. 
						She traveled to cote d’Ivoire in June 2016 on behalf of her school and HKC to donate the supplies to a  local orphanage in Bingerville. 
						She has  decided to then name her  foundation Help Kids in Côte d’ivoire. ​</p>
				</div>
				<div class="column col-md-6 col-sm-6">
					<div class="img-row"> 
						<div class="img-column">
							<img src="{{asset('images/img/1.jpg')}}">
							<img src="{{asset('images/img/2.jpg')}}">
							<img src="{{asset('images/img/8.jpg')}}">
						</div>
						<div class="img-column">
							<img src="{{asset('images/img/3.jpg')}}">
							<img src="{{asset('images/img/4.jpg')}}">
							<img src="{{asset('images/img/5.jpg')}}">
						</div> 
						<!-- <div class="img-column">
							<img src="{{asset('images/img/6.jpg')}}">
							<img src="{{asset('images/img/7.jpg')}}">
							<img src="{{asset('images/img/8.jpg')}}">
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


<!--start our-team-->
<section class="our-team style-two">
	<div class="container">
		<div class="section-title">
            <h5>meet our devoted staff</h5>
            <h1>our<span> Team</span></h1>
			<p>This is a group of people working towards a shared vision. They run our different activities, and aim at making a better life for kids in Cote d'Ivoire. </p>
        </div>

		<div class="item-box">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<div class="bg-area">
							<div class="image-box">
								<img src="{{asset('images/team/ceo.jpeg')}}" alt="" />
							</div>
							<div class="content-box">
								<h4>CEO / Founder</h4><br>
								<div class="progress-levels">  
									<!--Skill Box-->
									<div class="progress-box"> 
										<div class="inner">
											<div class="bar">
												<div class="bar-innner">
													<div class="bar-fill" data-percent="100"></div>											
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="text">
									<p>Role description</p>
								</div>
								<ul class="social">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<div class="bg-area">
							<div class="image-box">
								<img src="{{asset('images/team/chiefOfStaff.png')}}" alt="" />
							</div>
							<div class="content-box">
								<h4>Chief of Staff</h4><br>
								<div class="progress-levels">  
									<!--Skill Box-->
									<div class="progress-box"> 
										<div class="inner">
											<div class="bar">
												<div class="bar-innner">
													<div class="bar-fill" data-percent="100"></div>											
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="text">
									<p>Role description</p>
								</div>
								<ul class="social">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<div class="bg-area">
							<div class="image-box">
								<img src="{{asset('images/team/pm.png')}}" alt="" />
							</div>
							<div class="content-box">
								<h4>Project Manager / Publicist</h4>
								<div class="progress-levels">  
									<!--Skill Box-->
									<div class="progress-box"> 
										<div class="inner">
											<div class="bar">
												<div class="bar-innner">
													<div class="bar-fill" data-percent="100"></div>											
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="text">
									<p>Role description</p>
								</div>
								<ul class="social">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="item">
						<div class="bg-area">
							<div class="image-box">
								<img src="{{asset('images/team/pma.png')}}" alt="" />
							</div>
							<div class="content-box">
								<h4>Project Manager Assistant</h4>
								<div class="progress-levels">  
									<!--Skill Box-->
									<div class="progress-box"> 
										<div class="inner">
											<div class="bar">
												<div class="bar-innner">
													<div class="bar-fill" data-percent="100"></div>											
												</div> 
											</div>
										</div>
									</div>
								</div>
								<div class="text">
									<p>Role description</p>
								</div>
								<ul class="social">
									<li><a href="#"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#"><span class="fa fa-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!--end our-team-->
<section class="reviews">
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


@endsection