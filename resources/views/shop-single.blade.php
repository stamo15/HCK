@extends('layout.app')
@section('content')
  
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>single<span>shop</span></h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">pages</a></li>
                <li>Single shop</li>
            </ul>
        </div>
    </div>
</section>

<section class="shop-single-area">
    <div class="container">
       
                <div class="single-products-details">       
                    <div class="product-content-box">
                        <div class="row">
                            <div class="col-md-6 img-box">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="images/shop/10.jpg">
                                            <div class="thumb-image">
                                                <img src="images/shop/10.jpg" alt="" data-imagezoom="true" class="img-responsive"> 
                                            </div>
                                        </li>
                                        <li data-thumb="images/shop/10.jpg">
                                            <div class="thumb-image">
                                                <img src="images/shop/10.jpg" alt="" data-imagezoom="true" class="img-responsive"> 
                                            </div>
                                        </li>  
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="content-box">
                                    <h3>Ladies Bag</h3>
                                    <div class="review-box">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li>(12 Reviews)</li>
                                        </ul>
                                    </div>
                                    <span class="price">$15</span>
                                    <div class="text">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    </div>
									
									<ul class="size">
										<li>sizes:</li>
										<li>xs</li>
										<li>s</li>
										<li>m</li>
										<li>l</li>
										<li>xl</li>
									</ul>
									
                                    <div class="addto-cart-box">
                                        
                                        <div class="item-quantity clearfix">
                                            <span class="qt-title">Quantity :</span>
                                            <div class="quantity-spinner">
                                                <button type="button" class="minus"><span class="fa fa-minus"></span>
                                                </button>
                                                <input type="text" name="product" value="01" class="prod_qty" />
                                                <button type="button" class="plus"><span class="fa fa-plus"></span></button>
                                            </div>
                                        </div>
                                    </div>    
                                    <ul class="link">
                                        <li><a href="#" class="thm-btn">Add to Cart</a></li>
                                        <li><a href="#" class="thm-btn">ADD TO WISHLIST</a></li>
										
                                    </ul>
                                </div>
                            </div>
                        </div>   
                    </div>
                
                    <div class="product-tab-box">
                        <ul class="nav nav-tabs tab-menu">
                            <li class="active"><a href="#desc" data-toggle="tab">Descriprion</a></li>
                            <li><a href="#review" data-toggle="tab">Reviews (12)</a></li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="desc">
                                <div class="product-details-content">
                                    <div class="desc-content-box">
									<h4>It is very good product.</h4>
                                        <p>This is a custom CMS block. You can use it to display information about shipping, returns, refunds, latest promotions etc. Put any content you want here, like text, HTML, images or videos. There are many useful blocks like this one across the theme. All CMS blocks are editable from the admin panel. You can delete block static Custom Tab if you want.</p>

										<p>Shipping: Please allow about 5-10 business days for delivery. For delivery to Alaska or Hawaii, please allow 10-15 days for delivery. For delivery to PO Boxes in Alaska, Hawaii, US Territories and APO/FPO addresses, allow three weeks for delivery.</p>

										<p>Backorders: All backordered items will be shipped via Standard Delivery service at no additional charge.</p>

										<p>Returns Policy: You may return new, unworn or unused products within thirty (30) days of delivery for a full refund of the cost of the goods, or an exchange if </p>
                                        
                                    </div>

                                </div>    
                            </div>
                            <div class="tab-pane" id="review">
                                <div class="review-box">
                                    <div class="tab-title-h4">
                                        <h4>2 Reviews</h4>
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
                                    <!--End single review box-->   
                                </div>
                                
                            </div>

                        </div>      
                    </div>
                
                    <!--Start related product -->
                    <section class="our-shop style-two">
						<div class="container">
							<div class="title">
								<h3>related <span>products</span></h3>
							</div>
							<div class="shop-carousel">
								<div class="item">
									<figure class="image-holder">
										<img src="images/shop/1.jpg" alt="" />
										<div class="link"><a href="#" class="thm-btn hvr-bounce-to-top">buy now!</a></div>
									</figure>
									 
									<div class="content-holder">
										<h4>Ladies Bag <span class="fa fa-heart-o"></span></h4>
										<div class="price-box">
											<div class="clearfix">
												<div class="float_left">
													<div class="rating">
														<span class="fa fa-star-o"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span>
													</div>
												</div>
												<div class="float_right">
													<h4>$15</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<figure class="image-holder">
										<img src="images/shop/2.jpg" alt="" />
										<div class="link"><a href="#" class="thm-btn hvr-bounce-to-top">buy now!</a></div>
									</figure>
									 
									<div class="content-holder">
										<h4>Ladies Bag <span class="fa fa-heart-o"></span></h4>
										<div class="price-box">
											<div class="clearfix">
												<div class="float_left">
													<div class="rating">
														<span class="fa fa-star-o"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span>
													</div>
												</div>
												<div class="float_right">
													<h4>$15</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<figure class="image-holder">
										<img src="images/shop/3.jpg" alt="" />
										<div class="link"><a href="#" class="thm-btn hvr-bounce-to-top">buy now!</a></div>
									</figure>
									 
									<div class="content-holder">
										<h4>Ladies Bag <span class="fa fa-heart-o"></span></h4>
										<div class="price-box">
											<div class="clearfix">
												<div class="float_left">
													<div class="rating">
														<span class="fa fa-star-o"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span>
													</div>
												</div>
												<div class="float_right">
													<h4>$15</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<figure class="image-holder">
										<img src="images/shop/4.jpg" alt="" />
										<div class="link"><a href="#" class="thm-btn hvr-bounce-to-top">buy now!</a></div>
									</figure>
									 
									<div class="content-holder">
										<h4>Ladies Bag <span class="fa fa-heart-o"></span></h4>
										<div class="price-box">
											<div class="clearfix">
												<div class="float_left">
													<div class="rating">
														<span class="fa fa-star-o"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span> 
														<span class="fa fa-star"></span>
													</div>
												</div>
												<div class="float_right">
													<h4>$15</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
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