<?PHP
session_start();
?>
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
  
	</head>


	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			    <!-- start of main menu-->
                               <div class="menu">
                                   <?php include 'menu.php';?>
                               </div>
                   <!-- end of main menu-->

				<section class="page-header-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="page-header">
								  <h1>Operations</h1>
								</div>
								<ol class="breadcrumb">
								  <li><a href="">Home</a></li>
								  <li><a href="">Operations</a></li>
								  <li class="active">View/Edit Fault Log</li>
								</ol>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>


				<div class="container">
					<div class="content-wrapper">
						<div class="job-page-wrapper">
							<div class="row">
								<div class="col-md-12">
									<h2>View/Edit Fault Log</h2>
									<div class="job-details">
<?php
include('include/connection.php');

@header("content-type:image/jpeg");
$button_id = $_POST['button_id'];

foreach ($button_id as $selected_user_id) {
	//echo $selected_user_id . "<br>";

 	$sql = "SELECT * FROM logged_faults WHERE id = $selected_user_id";
 	$result = mysqli_query($conn, $sql);

 	while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                //echo "$id . 'IS ID'";
 		$logged_by = $row["logged_by"];
                $reg_number = $row["reg_number"]; 
                $fleet_number = $row["fleet_number"];
                $client_name = $row["client_name"];
                $repaired_by = $row["repaired_by"];
                $fault_confirmed = $row["fault_confirmed"];
                $type_of_damage = $row["type_of_damage"]; 
                $date_of_log = $row["date_of_log"];
                $date_of_complete = $row["date_of_complete"]; 
                $upload_picture = $row["upload_picture"];
                $additional_notes = $row["additional_notes"];            
 	}
    }
?>
    <br>
    <h4>
            <p>
                Update this <span style="color: red;"><?php echo $client_name; ?></span>'s fault log entry logged by <span style="color: red;"><?php echo $logged_by; ?></span>
         
            	<a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                <a href="faults-log-form.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Log a fault</button></a>
                <a href="faults-log-query-results.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> View all faults</button></a>
                <a href="login-home.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-off"></span> Exit</button></a>
            </p>
        </h4>
    <br>
    <div class="row">
        <div class="col-sm-4">
            <form action="faults-log-form-update.php" method="post">
                <!--form action="mail_handler.php" method="post"-->

                <div class="form-group">
                    <label for="reg-number">Logged by:</label>
                    <input type="text" class="form-control" name="logged-by" value="<?php echo $logged_by; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="reg-number">Registration <sup>no. </sup></label>
                    <input type="text" class="form-control" name="reg-number" value="<?php echo $reg_number; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="fleet-number">Fleet <sup>no.</sup></label>
                    <input type="text" class="form-control" name="fleet-number" value="<?php echo $fleet_number; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="client-number">Client's Name:</label>
                    <input type="text" class="form-control" name="client-name" value="<?php echo $client_name; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="repaired-by">Repaired by:</label>
                    <input type="text" class="form-control" name="repaired-by" value="<?php echo $repaired_by; ?>">
                </div>

                <div class="form-group">
                    <label for="fault-type">Type of fault:</label>
                    <input type="text" class="form-control" name="fault-type" value="<?php echo $type_of_damage; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="Additional-notes">Additional Notes of Fault:</label>
                    <input type="text" class="form-control" name="additional-notes" value="<?php echo $additional_notes; ?>">
                </div>

        </div>

        <div class="col-sm-4">
            <label for="fault-confirmed">Fault Completed</label>
            <div class="radio">
                <label>
                    <input type="radio" name="radio" value="Yes">Yes</label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="radio" value="No" checked="checked">No</label>
            </div>
            <hr>
            <br>
            
            <div class="form-group">
                <label for="date">Date Logged: &nbsp;&ensp;&ensp;</label>
                <input type="date" name="date-of-log" value="<?php echo $date_of_log;?>" readonly>
            </div>

            <div class="form-group">
                <label for="date">Date Completed:</label>
                <input type="date" name="date-of-complete" value="<?php echo $date_of_complete; ?>">
            </div>  
            
            <br>
            <hr>

          
            <label for="fleet-number">Preview of damaged device image:</label>    
         
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($upload_picture).'"/>'; ?>
       
            <p>TO DOWNLOAD: Right click > Save image as</p>   
            
            
            
        </div>

        <div class="col-sm-4">
        </div>
        
        <hr>
    	<input type="submit" class="btn btn-success" name="button_id" value="<?php echo $id; ?>" style="margin-bottom: 40px;">
    </form>
    </div>
<?php             
mysqli_close($conn);
?>
										
									</div>
								</div>
							</div>
						</div><!-- /.job-page-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->


				<section class="footer-widget-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="footer-widget">
									<p class="subcsribe-text wow fadeInDown">Some useful links.</p>

									<h3 class="wow fadeInDown">Social Network Links</h3>

									<div class="social-link wow fadeInDown">
										<ul>
											<!--li><a href="#"><i class="fa fa-rss"></i></a></li-->
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<!--li><a href="#"><i class="fa fa-google-plus"></i></a></li-->
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											<!--li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-flickr"></i></a></li-->
										</ul>
									</div>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-6 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">External Links</h3>
									<ul class="wow fadeInDown">
										<li><a href="http://www.safetgateway.co.za/">CMS Gateway Server</a></li>
										<li><a href="http://129.232.134.18:8080/808gps/login.html">Vehicle Management System</a></li>
										<li><a href="">Truck Assist Website</a></li>
										<li><a href="">Track Me Live Website</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Shortcut links</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Operations</a></li>
										<li><a href="#">QC</a></li>
										<li><a href="#">Logistics</a></li>
										<li><a href="#">IT</a></li>
										<li><a href="#">Admin</a></li>
									</ul>
								</div><!-- /.footer-widget -->
							</div><!-- /.col-md-2 -->
							<div class="col-md-2 col-sm-4 col-xs-4">
								<div class="footer-widget">
									<h3 class="wow fadeInDown">Contact</h3>
									<ul class="wow fadeInDown">
										<li><a href="#">Reception</a></li>
										<li><a href="#">Operations</a></li>
										<li><a href="#">IT Support</a></li>
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
								<div class="copyright wow fadeInDown">
									<p>Copyright &copy; 2017 . All Rights Reserved. Designed by <a href="http://www.truckassist.com/">truckassist.com</a> </p>
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
	      <h3>Mobile Menu</h3>
	      	<div>
		      <div>
				<ul>
					<li><a href="#">Home</a>
						<ul>
							<li class="active"><a href="index.html"><i class="fa fa-home"></i> Home Style One</a></li>
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
							<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contact</a></li>
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
	</body>
</html>
