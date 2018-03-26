@extends('layout.app')
@section('content')
  
<section class="page-banner">
    <div class="container">
		<div class="title">
            <h1>4<span>0</span>4</h1>
        </div>
        <div class="text">
			<p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore </p>
		</div>
		<div class="breadcumb-wrapper">
            <ul class="list-inline link-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">pages</a></li>
                <li>404</li>
            </ul>
        </div>
    </div>
</section>

<section class="error-page">
	<div class="container">
		<div class="inner-box">
			<h2>We are sorry for missing!!! </h2>
			<figure class="image-box">
				<img src="images/resources/404.png" alt="" />
			</figure>
			<div class="link"><a href="index.html" class="thm-btn">go to home</a></div>
		</div>
		
	</div>

</section>
@endsection