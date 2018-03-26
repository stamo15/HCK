@extends('layout.app')
@section('content')
 
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>Single  <span>blog</span></h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Blog</a></li>
                <li>Single blog</li>
            </ul>
        </div>
    </div>
</section>


<div class="sidebar-page-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <section class="blog-section">
					
                    <div class="large-blog-news style-two wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                       
                        <figure class="img-holder">
                            <a href="blog-details.html"><img src="images/blog/sb.jpg" alt="News"></a>
                        </figure>
						
                        <div class="lower-content">
                            <h4><a href="blog-details.html">Children’s National festival for learning</a></h4>
							<ul class="blog-info">
								<li><i class="fa fa-user"></i>&ensp; By <span>John Doe</span> &ensp; </li>
								<li><i class="fa fa-calendar"></i>&ensp; January 18, 2017&ensp; </li>
							</ul>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, duies tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, incididunt ut labo amited et dolore magna aliqua. Ut enim ad minim veniam, </p>
								<br>
								<p>Which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum genera tors on the Internet tend to repeat predefined chunks as necessary, making this the first true genera tor on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence </p>                         
                            </div>
							<div class="image-box">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="item">
											<img src="images/blog/sb1.jpg" alt="" />
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										<div class="item">
											<img src="images/blog/sb2.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="text style-two">
								<h3>Lorem Ipsum is not simply random </h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, duies tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, incididunt ut labo amited et dolore magna aliqua. Ut enim ad minim veniam, </p>
							</div>
                        </div>
                    </div>
					<div class="outer-box">
                        <div class="share-box clearfix">
                            <ul class="tag-box pull-left">
                                <li>Tags:</li>
                                <li><a href="#"> Nonprofit,</a></li>
                                <li><a href="#">Charity,</a></li>
                                <li><a href="#">Fund,</a></li>
                            </ul>
                            <div class="social-box pull-right">
                            
								<ul class="list-inline social">
                                    <li><a href="#"><i class="fa fa-facebook"></i>Like</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i>Share</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                            
                        <div class="product-review-tab">    
                            <div class="inner-title style-two">
                                <h3>2 Comments</h3>
                            </div>
                            <div class="review-box">
                                <div class="single-review-box">
                                    <div class="img-holder">
                                        <img src="images/blog/c1.png" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="name pull-left">
                                                <h4>Robart Sharif</h4>
                                            </div>       
                                        </div>
                                        <div class="text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
											 <div class="link"><a href="#" class="thm-btn2">Reply</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single review box-->
                                <!--Start single review box-->
                                <div class="single-review-box">
                                    <div class="img-holder">
                                        <img src="images/blog/c2.png" alt="Awesome Image">
                                    </div>
                                    <div class="text-holder">
                                        <div class="top">
                                            <div class="name pull-left">
                                                <h4>Ahmad Sharif</h4>
                                            </div>
                                            
                                        </div>
                                        <div class="text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera tion in some form, by injected humour, or randomised words.</p>
											 <div class="link"><a href="#" class="thm-btn2">Reply</a></div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single review box-->   
                            </div>
                            <div class="add_your_review">
                                <div class="inner-title style-two">
                                    <h3>Post your comment</h3>
                                </div>

                                <div class="default-form-area">
                                    <form id="contact-form" name="contact_form" class="default-form" action="http://perconcept.muzahid.com/Charity-sympathy/sendmail.php" method="post">
                                        <div class="row clearfix">
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                
                                                <div class="form-group">
                                                    <input type="text" name="form_name" class="form-control" value="" placeholder="username.." required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="email" name="form_email" class="form-control required email" value="" placeholder="email address.." required="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <input type="text" name="form_phone" class="form-control" value="" placeholder="website..">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <textarea name="form_message" class="form-control textarea required" placeholder="write..."></textarea>
                                                </div>
                                            </div>   
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">submit</button>
                                                </div>
                                            </div>   

                                        </div>
                                    </form>
                                </div>

                            </div> <!-- End of .add_your_review -->
                        </div>
                        
                    </div>
                    
                </section>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="blog-sidebar">
                    <div class="sidebar_search">
                        <form action="#">
                            <input type="text" placeholder="Search here..">
                            
                        </form>
                    </div><br><br> <!-- End of .sidebar_styleOne -->

                    <div class="category-style-one wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#" class="clearfix"><span class="float_left">Food </span><span class="float_right">(20)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Water </span><span class="float_right">(16)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Education  </span><span class="float_right">(28)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">Africa </span><span class="float_right">(45)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">India</span><span class="float_right">(12)</span></a></li>
							<li><a href="#" class="clearfix"><span class="float_left">Event</span><span class="float_right">(33)</span></a></li>
                        </ul>
                    </div><br> <!-- End of .sidebar_categories -->

                    <div class="popular_news wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-title">
                            <h4>Recent post</h4>
                        </div>

                        <div class="popular-post">
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-1.jpg" alt=""></a></div>
                                <a href="#"><h5>Micenas Placerat Nibh Loreming Fentum</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>SEP 29, 2015</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-2.jpg" alt=""></a></div>
                                <a href="#"><h5>Integer Suscipit Sit Amet</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>SEP 29, 2015</div>
                            </div>
                            <div class="item">
                                <div class="post-thumb"><a href="#"><img src="images/blog/post-3.jpg" alt=""></a></div>
                                <a href="#"><h5>Praeent Veh Neget Tempus</h5></a>
                                <div class="post-info"><i class="fa fa-calendar"></i>SEP 29, 2015 </div>
                            </div>
                        </div>
                    </div>
                    <br>
					<div class="category-style-one wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="inner-title">
                            <h4>Archive</h4>
                        </div>
                        <ul class="list">
                            <li><a href="#" class="clearfix"><span class="float_left">September 2018 </span><span class="float_right">(20)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">August 2017 </span><span class="float_right">(16)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">July 2016  </span><span class="float_right">(28)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">October 2015 </span><span class="float_right">(45)</span></a></li>
                            <li><a href="#" class="clearfix"><span class="float_left">January 2014</span><span class="float_right">(12)</span></a></li>
							<li><a href="#" class="clearfix"><span class="float_left">December 2013</span><span class="float_right">(33)</span></a></li>
                        </ul>
                    </div> <!-- End of .sidebar_archive -->
                </div> <!-- End of .wrapper -->   
            </div>
        </div>
    </div>
</div>

<section class="clients-section">
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