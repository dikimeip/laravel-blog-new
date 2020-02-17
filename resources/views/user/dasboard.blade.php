<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Web Programing Jaman Now</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href="">News</a></li>
							@foreach($kategori as $k)
							<li class="cat-1"><a href="">{{$k->nama_kategori}}</a></li>
							@endforeach
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="#">Join Us</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="contact.html">Contacts</a></li>
						</ul>
					</div>
					<!-- /nav -->

					<!-- widget posts -->
					<div class="section-row">
						<h3>All Post</h3>
						@foreach($getallartikel as $gaa)
						<div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="{{asset('image/'.$gaa->gambar)}}" alt=""></a>
							<div class="post-body">
								<h3 class="post-title"><a href="blog-post.html">{{$gaa->judul}}</a></h3>
							</div>
						</div>
						@endforeach
						
					</div>
					<!-- /widget posts -->
					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>
		<!-- /Header -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
					<!-- post -->
					@foreach($limitnew as $ln)
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="blog-post.html"><img style="width: 560px;height: 350px" src="{{asset('image/'.$ln->gambar)}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="category.html">{{$ln->kategori->nama_kategori}}</a>
									<span class="post-date">{{$ln->tanggal}}</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{$ln->judul}}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->

					<!-- post -->
					
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>New Posts</h2>
						</div>
					</div>

					<!-- post -->
					@foreach($allnew as $an)
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="blog-post.html"><img style="width: 350;height: 200px" src="{{asset('image/'.$an->gambar)}}" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-1" href="category.html">{{$an->kategori->nama_kategori}}</a>
									<span class="post-date">{{$an->tanggal}}</span>
								</div>
								<h3 class="post-title"><a href="blog-post.html">{{$an->judul}}</a></h3>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Populer Posts</h2>
						</div>
					</div>
					<div class="col-md-8">
						<div class="row">
							<!-- post -->
							<div class="col-md-12">
								@foreach($getmost as $gt)
								<div class="post post-thumb">
									<a class="post-img" href="blog-post.html"><img style="height: 400px;width:'100%' " src="{{asset('image/'.$gt->gambar)}}" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-3" href="category.html">{{$gt->kategori->nama_kategori}}</a>
											<span class="post-date">{{$gt->tanggal}}</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{$gt->judul}}</a></h3>
									</div>
								</div>
								@endforeach
							</div>
							<!-- /post -->

							<!-- post -->
							@foreach($getmostall as $gma)
							<div class="col-md-6">
								<div class="post">
									<a class="post-img" href="blog-post.html"><img src="{{asset('image/'.$gma->gambar)}}" style="width: '100%';height: 200px " alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-4" href="category.html">{{$gma->kategori->nama_kategori}}</a>
											<span class="post-date">{{$gma->tanggal}}</span>
										</div>
										<h3 class="post-title"><a href="blog-post.html">{{$gma->judul}}</a></h3>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>

					<div class="col-md-4">
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>All Post</h2>
							</div>
							@foreach($getallartikel as $gaa)
							<div class="post post-widget">
								<a class="post-img" href="blog-post.html"><img src="{{asset('image/'.$gaa->gambar)}}" alt=""></a>
								<div class="post-body">
									<h3 class="post-title"><a href="blog-post.html">{{$gaa->judul}}</a></h3>
								</div>
							</div>
							@endforeach
						</div>
						<!-- /post widget -->
						
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5">
						<div class="footer-widget">
							<div class="footer-logo">
								<a href="index.html" class="logo"><img src="./img/logo.png" alt=""></a>
							</div>
							<ul class="footer-nav">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Advertisement</a></li>
							</ul>
							<div class="footer-copyright">
								<span>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">About Us</h3>
									<ul class="footer-links">
										<li><a href="about.html">About Us</a></li>
										<li><a href="#">Join Us</a></li>
										<li><a href="contact.html">Contacts</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-widget">
									<h3 class="footer-title">Catagories</h3>
									<ul class="footer-links">
										<li><a href="category.html">Web Design</a></li>
										<li><a href="category.html">JavaScript</a></li>
										<li><a href="category.html">Css</a></li>
										<li><a href="category.html">Jquery</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="footer-widget">
							<h3 class="footer-title">Join our Newsletter</h3>
							<div class="footer-newsletter">
								<form>
									<input class="input" type="email" name="newsletter" placeholder="Enter your email">
									<button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
