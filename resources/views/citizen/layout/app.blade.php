<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CITIZEN37 - Smart Employment Platform</title>
	<meta name="description" content="Bounty platforms for the unemployed youths of South Africa">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="{{ url('citizen/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/bootstrap-slider.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/chosen.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/morris.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/YouTubePopUp.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/auto-complete.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/jquery.navhideshow.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/style.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/colorv2.css') }}">
	<link rel="stylesheet" href="{{ url('citizen/css/responsive.css') }}">
	<script src="{{ url('citizen/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>

</head>
<body class="listar-home listar-hometwo">
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
    
    
    
    	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="listar-header" class="listar-header listar-headervtwo listar-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<nav id="listar-nav" class="listar-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
								<ul>
									<li>
										<a href="/">Home</a>
									</li>
									<li>
										<a href="{{ route('bounties') }}">Bounties</a>
									</li>
									<li><a href="{{ route('profile') }}">@lang('app.update_profile')</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
        
        <main>
        @yield('content')
        </main>

		
		<footer id="listar-footer" class="listar-footer listar-footervtwo listar-haslayout">
			<div class="listar-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="listar-copyright">Copyright &copy; 2018 Team #1632. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
        	<script src="{{ url('citizen/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ url('citizen/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCIBL1Bzhxkvxglbq8QgFz0kTZSm-1ncOA&amp;language=en"></script>
	<script src="{{ url('citizen/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci') }}"></script>
	<script src="{{ url('citizen/js/mapclustering/markerclusterer.min.js') }}"></script>
	<script src="{{ url('citizen/js/mapclustering/infobox.js') }}"></script>
	<script src="{{ url('citizen/js/mapclustering/map.js') }}"></script>
	<script src="{{ url('citizen/js/ResizeSensor.js.js') }}"></script>
	<script src="{{ url('citizen/js/jquery.sticky-sidebar.js') }}"></script>
	<script src="{{ url('citizen/js/YouTubePopUp.jquery.js') }}"></script>
	<script src="{{ url('citizen/js/jquery.navhideshow.js') }}"></script>
	<script src="{{ url('citizen/js/backgroundstretch.js') }}"></script>
	<script src="{{ url('citizen/js/jquery.sticky-kit.js') }}"></script>
	<script src="{{ url('citizen/js/bootstrap-slider.js') }}"></script>
	<script src="{{ url('citizen/js/owl.carousel.min.js') }}"></script>
	<script src="{{ url('citizen/js/jquery.vide.min.js') }}"></script>
	<script src="{{ url('citizen/JS/auto-complete.js') }}"></script>
	<script src="{{ url('citizen/js/chosen.jquery.js') }}"></script>
	<script src="{{ url('citizen/js/scrollbar.min.js') }}"></script>
	<script src="{{ url('citizen/js/isotope.pkgd.js') }}"></script>
	<script src="{{ url('citizen/js/jquery.steps.js') }}"></script>
	<script src="{{ url('citizen/js/prettyPhoto.js') }}"></script>
	<script src="{{ url('citizen/js/raphael-min.js') }}"></script>
	<script src="{{ url('citizen/js/parallax.js') }}"></script>
	<script src="{{ url('citizen/js/sortable.js') }}"></script>
	<script src="{{ url('citizen/js/countTo.js') }}"></script>
	<script src="{{ url('citizen/js/appear.js') }}"></script>
	<script src="{{ url('citizen/js/gmap3.js') }}"></script>
	<script src="{{ url('citizen/js/dev_themefunction.js') }}"></script>
</body>
</html>