<!DOCTYPE html>
<html lang="en">

	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Truck Assist</title>
    <!-- Web Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300' rel='stylesheet' type='text/css'>
    <!-- Flaticon CSS -->
    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
    <!-- font-awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- owl.carousel CSS -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <!-- Offcanvas CSS -->
    <link href="css/hippo-off-canvas.css" rel="stylesheet">
    <!-- animate CSS -->
    <link href="css/animate.css" rel="stylesheet">
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/truck-2.ico">

    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	    <script src="js/vendor/html5shim.js"></script>
	    <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
	</head>


	<body>

	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
                                <div class="menu">
                                   <?php include 'menu.php';?>
                               </div>
				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>Feedback</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="">Home</a></li>
								  <li class="active">Contact Us</li>
								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>


				<div class="container">
					<div class="content-wrapper">
						<div class="contact-us-wrapper">
							<div class="contact-us-form">

								<h2>Feedback on this app</h2>


								<form id="contactForm" action="sendemail.php" method="POST">
									<div class="row">
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="name">Name</label>
										    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
										    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Name">
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="email">Email address</label>
										    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
										    <input id="email" name="email" type="email" class="form-control" required="" placeholder="Email">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="phone">Phone</label>
										    <span class="input-group-addon" id="basic-addon3"><i class="fa fa-phone"></i></span>
										    <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone">
										  </div>
										</div>
										<div class="col-md-6">
										  <div class="input-group">
										    <label class="sr-only" for="subject">Subject</label>
										    <span class="input-group-addon" id="basic-addon4"><i class="fa fa-file-text"></i></span>
										    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="Subject">
										  </div>
										</div>
									</div>

									<div class="input-group text-area">
										<label class="sr-only" for="message">Message</label>
										<span class="input-group-addon" id="basic-addon5"><i class="fa fa-file-text-o"></i></span>
										<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder="Message"></textarea>
									</div>

									<button type="submit" class="btn btn-primary btn-lg">Send</button>
								</form>
							</div>

						</div><!-- /.content-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->


				<section class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="footer-widget">
									<p class="subcsribe-text">Quickly utilize installed base channels before premier expertise. Conveniently extend web-enabled niche markets without 2.0 e-markets. Collaboratively incentivize .</p>

									<h3>Subscribe to newsletter</h3>

									<form>
									  <div class="form-group">
									    <label class="sr-only" for="exampleInputEmail1">Email address</label>
									    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
									  </div>
									  <button type="submit" class="btn btn-primary">Subscribe</button>
									</form>

									<div class="social-link">
										<ul>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-flickr"></i></a></li>
										</ul>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-6 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Customer Care</h3>
									<ul>
										<li><a href="#">Customer Support</a></li>
										<li><a href="#">Platinum Support</a></li>
										<li><a href="#">Gold Support</a></li>
										<li><a href="#">Standard Support</a></li>
										<li><a href="#">Training</a></li>
										<li><a href="#">Online Training</a></li>
										<li><a href="#">Custom Training</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Information</h3>
									<ul>
										<li><a href="#">Press</a></li>
										<li><a href="#">Articles</a></li>
										<li><a href="#">Reviews</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Awards</a></li>
										<li><a href="#">Video Clips</a></li>
										<li><a href="#">Blog</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3>Solutions</h3>
									<ul>
										<li><a href="#">Contact Center</a></li>
										<li><a href="#">Knowledge</a></li>
										<li><a href="#">Management</a></li>
										<li><a href="#">Web Self-Service</a></li>
										<li><a href="#">Performance Metrics</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</section>


				<footer class="footer-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright">
									<p>Copyright &copy; 2015 primex . All Rights Reserved. Designed by <a href="http://www.uicookies.com">uicookies.com</a> </p>
								</div><!-- /.copyright -->
							</div><!-- /.col-md-12 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</footer>
	       	</div> <!-- .st-content-inner -->
	      </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->


			<!-- ======== OFFCANVAS MENU ========= -->
	    <div class="offcanvas-menu offcanvas-effect visible-xs">
	      <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
	      <h3>Sidebar Menu</h3>
	      <div>
	        <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
						</ul>
					</li>

					<li><a href="#">About</a>
						<ul>
							<li><a href="about-us.html"><i class="fa fa-life-ring"></i> About Us</a></li>
							<li><a href="about-me.html"><i class="fa fa-user"></i> About me</a></li>
						</ul>
					</li>

					<li><a href="#">Blog</a>
						<ul>
							<li><a href="blog.html"><i class="fa fa-pencil-square-o"></i> Standard Blog</a></li>
							<li><a href="blog-single.html"><i class="fa fa-pencil"></i> Single Article</a></li>
						</ul>
					</li>

					<li><a href="#">Portfolio</a>
						<ul>
							<li><a href="portfolio-four.html"><i class="fa fa-picture-o"></i> Four Column</a></li>
							<li><a href="portfolio-three.html"><i class="fa fa-paper-plane-o"></i> Three Column</a></li>
							<li><a href="portfolio-two.html"><i class="fa fa-magic"></i> Two Column</a></li>
						</ul>
					</li>


					<li><a href="#">Pages</a>
						<ul>
							<li><a href="job-page.html"><i class="fa fa-briefcase"></i> Job Page</a></li>
							<li><a href="clients-page.html"><i class="fa fa-coffee"></i> Clients Page</a></li>
							<li><a href="faq.html"><i class="fa fa-question-circle"></i> FAQ Page</a></li>
							<li><a href="typography.html"><i class="fa fa-puzzle-piece"></i> Typography Page</a></li>
						</ul>
					</li>


					<li><a href="#">Contact</a>
						<ul>
							<li class="active"><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
						</ul>
					</li>
				</ul>
	        </div>
	      </div>
	    </div><!-- .offcanvas-menu -->
	 </div><!-- /st-container -->



		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow.min.js -->
    <script src="js/wow.min.js"></script>
	<!-- jQuery REVOLUTION Slider  -->
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- owl-carousel -->
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <!-- smoothscroll -->
    <script src="js/smoothscroll.js"></script>
	<!-- Offcanvas Menu -->
	<script src="js/hippo-offcanvas.js"></script>
	<!-- easypiechart -->
	<script src="js/jquery.easypiechart.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
	<!-- Magnific-popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Shuffle.min js -->
	<script src="js/jquery.shuffle.min.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
    <!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript">
	    function initialize() {
	        var myLatlng = new google.maps.LatLng(40.728157, -74.077642);
	        var mapOptions = {
	            zoom: 15,
	            scrollwheel: false,
	            center: myLatlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);

	        var marker = new google.maps.Marker({
	            position: myLatlng,
	            map: map,
	            animation: google.maps.Animation.DROP,
	            title: 'Hello World!'
	        });

	        var contentString = '' +
	                '' +
	                '';

	        var infowindow = new google.maps.InfoWindow({
	            content: contentString
	        });

	        google.maps.event.addListener(marker, 'click', function () {
	            infowindow.open(map, marker);
	        });
	    }

	    google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	</body>
</html>
