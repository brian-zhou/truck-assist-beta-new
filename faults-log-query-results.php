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

    <style>

    table{ 
        width: 70% !important;
        }
        
    table,th {
            width: 10%;
        }

    </style>
  
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
                                  <li><a href="#">Home</a></li>
                                  <li><a href="#">Operations</a></li>
                                  <li class="active">All Logged Faults</li>
                                </ol>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>


                <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>List of all logged faults</h2>
                                    <h4>
                                
                                        <a href="faults-log-form.php"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> Log a fault</button></a>
                                        <a href="csv-mysql-test.php"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-export"></span> Export CSV</button></a>
                                        <a href="faults-log-query-results.php"><button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-search"></span> View all faults</button></a>
                                        <a href="faults-log-ajax-search.php"><button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Search for logged faults</button></a>
                                        <a href="faults-log-report.php"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span> View Reports</button></a>
                                        </p>
                                    </h4> 
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12" style="margin-left: -17%">
                            
<?php
include('include/connection.php');

    $sql = "SELECT * FROM logged_faults ORDER BY `id` DESC";
    $result = mysqli_query($conn, $sql);

    echo "<form method = 'POST' action = 'faults-log-form-view-edit.php'>";
    if (mysqli_num_rows($result)>0){
        echo "<table class='table table-hover table table-bordered'>";
        echo "<tr>";
        echo "<th>Logged By</th>";
        echo "<th>Registration No.</th>";
        echo "<th>Fleet No.</th>";
        echo "<th>Client's Name</th>";
        echo "<th>Repaired By</th>";
        echo "<th>Fault Confirmed</th>";
        echo "<th>Fault Type</th>";
        echo "<th>Date Logged</th>";
        echo "<th>Date Completed</th>";
        echo "<th>Uploaded Image Name</th>";
        echo "<th>Addtional Notes</th>";
        echo "<th>View/Edit Record</th>";
        echo "<br>";
        echo "<br>";
        
        $button_id = array();
        //output data of each row
        $i =0;
        while($row = mysqli_fetch_array($result)){
            if ($i%2==0){
            echo "<tr bgcolor='FFFFFF'>";
            }
            else{
                echo "<tr bgcolor='cde5ef'>";
            }
            $i++;
                echo "<td>" . $row["logged_by"] . "</td>";
                echo "<td>" . $row["reg_number"] . "</td>"; 
                echo "<td>" . $row["fleet_number"] . "</td>";
                echo "<td>" . $row["client_name"] . "</td>";
                echo "<td>" . $row["repaired_by"] . "</td>";
                echo "<td>" . $row["fault_confirmed"] . "</td>";
                echo "<td>" . $row["type_of_damage"] . "</td>"; 
                echo "<td>" . $row["date_of_log"] . "</td>";
                echo "<td>" . $row["date_of_complete"] . "</td>"; 
                echo "<td>" . $row["upload_picture_name"] . "</td>";
                echo "<td>" . $row["additional_notes"] . "</td>";
                echo "<td><input type='submit' class='btn btn-success' name='button_id[]' value='" . $row["id"] . "'</td></tr>";
             }
                echo "</form>";
            }
     else {
        echo "0 results returned";
    }
mysqli_close($conn);
?>
                                </div>
                                
                            </div>
                </div><!-- /.container -->


                


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
