<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Capture - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="capture/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="capture/css/animate.css">
    
    <link rel="stylesheet" type="text/css" href="capture/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="capture/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="capture/css/magnific-popup.css">

    <link rel="stylesheet" type="text/css" href="capture/css/aos.css">

    <link rel="stylesheet" type="text/css" href="capture/css/ionicons.min.css">

    <link rel="stylesheet" type="text/css" href="capture/css/bootstrap-datepicker.css">
    <link rel="stylesheet" type="text/css" href="capture/css/jquery.timepicker.css">

    
    <link rel="stylesheet" type="text/css" href="capture/css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="capture/css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="capture/css/style.css">

  </head>
  <body>



	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html" style="color: #fff;"><span class="flaticon-camera" style="color: #fff;"></span>চিত্রকর</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="index.html">Home</a></li>
					<li><a href="{{ url('gallery') }}">Gallery</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		
		
		<div id="colorlib-main">
			@yield('body-content')
		</div>


		<div class="footer">
			@yield('footer')
		</div>
    
  </body>
</html>
