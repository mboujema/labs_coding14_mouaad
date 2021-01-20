<!DOCTYPE html>
<html lang="en">
<head>
	<title>Labs - Design Studio</title>
	<meta charset="UTF-8">
	<meta name="description" content="Labs - Design Studio">
	<meta name="keywords" content="lab, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{ asset("img/favicon.ico") }}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,600" rel="stylesheet">

	<!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/flaticon.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/owl.carousel.css") }}"/>
	<link rel="stylesheet" href="{{ asset("css/style.css") }}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="{{ asset("img/logo.png") }}" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="{{ asset("img/logo.png") }}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="{{ route("welcome") }}">Home</a></li>
				<li><a href="{{ route("service") }}">Services</a></li>
				<li class="active"><a href="{{ route("blog") }}">Blog</a></li>
                <li ><a href="{{ route("contact") }}">Contact</a></li>
                <li class="pl-5">
					@if (Route::has('login'))
            
					@auth
						<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">BackOffice</a>
					@else
						<a href="{{ route('login') }}" class="text-sm text-gray-700 underline  px-2">Login</a>
						@if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
	
					@endauth
				
			@endif</li>
                
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Blog</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Blog</span>
				</div>
			</div>
		</div>
	</div>
	<!-- Page header end-->


	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Single Post -->
					<div class="single-post">
						<div class="post-thumbnail">
							<img src="{{ asset("img/$show->path") }}" alt="">
							<div class="post-date">
								<h2>{{ $show->created_at->format('d')}}</h2>
								<h3>{{ $show->created_at->format('M Y') }}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{ $show->title }}</h2>
							<div class="post-meta">
								<a href="">{{ $show->users->name }}</a>
								<a href="">
									@foreach ($show->tags as $tag)
                    					{{ $tag->name }},
                    				@endforeach
								</a>
								<a href="">{{ count($show->commentaires) }} Comments</a>
							</div>
							<p>
								{{ $show->description }}
							</p>
						</div>
						<!-- Post Author -->
						<div class="author">
							<div class="avatar">
								<img src="{{ asset("img/$users->path") }}" alt="">
							</div>
							<div class="author-info">
								<h2>{{ $show->users->name }} <span>Author</span></h2>
								<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
							</div>
						</div>
						<!-- Post Comments -->
						<div class="comments">
							<h2>Comments ({{ count($show->commentaires) }})</h2>
							<ul class="comment-list">
								@foreach ($show->commentaires as $e)
									
								<li>
									<div class="avatar">
										<img src="{{ asset("img/")."/".$e->users->path }}" alt="">
									</div>
									<div class="commetn-text">
										<h3>{{ $show->users->name }} | {{ $show->created_at->format('D M, Y') }} | Reply</h3>
										<p>
											{{ $e->description }}
										</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<!-- Commert Form -->
						
						<div class="row">
							<div class="col-md-9 comment-from">
								<h2>Leave a comment</h2>
								@if (Route::has('login'))
								
								@auth
								<form class="form-class" action="/commentaire/{{ $show->id }}" method="POST">
									@csrf
									<div class="row">
										<div class="col-sm-12">
											<textarea name="description" placeholder="Message"></textarea>
											<button type="submit" class="site-btn">send</button>
										</div>
									</div>
								</form>
									
								@else
									<a href="{{ route('login') }}" class="text-sm text-gray-700 underline  px-2">Login</a>
								@if (Route::has('register'))
                            		<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        		@endif
	
								@endauth
				
								@endif
							</div>
						</div>
					</div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							<li>
								@foreach ($show->categories as $categorie)
                    					{{ $categorie->name }}
                    			@endforeach
							</li>
						</ul>
					</div>
					<!-- Single widget -->
					
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($show->tags as $tag)
							<li>
								{{ $tag->name }}
							</li>
                    		@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="{{ asset("img/add.jpg") }}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form">
						<input type="text" placeholder="Your e-mail here">
						<button class="site-btn btn-2">Newsletter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->


    <script src="{{ asset("js/jquery-2.1.4.min.js") }}"></script>
	<script src="{{ asset("js/owl.carousel.min.js") }}"></script>
	<script src="{{ asset("js/main.js") }}"></script>
</body>
</html>
