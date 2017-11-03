<?php ob_start();?>

<?php
require_once 'dompdf/lib/html5lib/Parser.php';
//C:\xampp\htdocs\truck-assist-beta-new\dompdf\lib\php-font-lib\src\FontLib
require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
//require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
require_once 'dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();

// reference the Dompdf namespace
class Font extends FontLib\Font {
    //this is a namespace fix:
}
use Dompdf\Dompdf;
use Dompdf\Options;
$html = ob_get_clean();

 $html = '
<!DOCTYPE html>
<html lang="en">

	<head>

    <title>Truck Assist</title>
    
	</head>


	<body>
	  <div id="st-container" class="st-container">
	    <div class="st-pusher">
	      <div class="st-content">
	        <div class="st-content-inner">
			    <!-- start of main menu-->
                               <div class="menu">
                                   <?php include "menu.php";?>
                               </div>


				<div class="container">
					<div class="content-wrapper">
						<div class="job-page-wrapper">
							<div class="row">
								<div class="col-md-12">
									<h2>Log a Fault</h2>
									<div class="job-details">
										
                    </h4>

        <div class="row">
            <div class="col-sm-12">

                <form action="faults-log-form-submit.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="reg-number">Logged by: </sup></label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Registration <sup>no. </sup></label>
                        <input type="text" class="form-control" name="reg-number">
                    </div>

                    <div class="form-group">
                        <label for="reg-number">Fleet <sup>no.</sup></label>
                        <input type="text" class="form-control" name="fleet-number">
                    </div>

                    <div class="form-group">
                        <label for="sel1">Client"s Name:</label>
                        <select class="form-control" id="client-name" name="client-name">
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Repaired by:</label>
                        <select class="form-control" id="repaired-by" name="repaired-by">
                        </select>
                        </div>
<br>
                <label for="client-notified-of-tamper">Fault Completed?</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="Yes">Yes</label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" value="No">No</label>
                </div>
           <br>
                <div id="initial-checklist">
                    <label for="type-of-damage">Specify Type of Fault:</label>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Video Loss" name="fault-type[]">Video Loss</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="GPS Error" name="fault-type[]">GPS Error </label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Offline" name="fault-type[]">Offline</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="HDD Error" name="fault-type[]">HDD Error</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Camera Removed" name="fault-type[]">Camera Removed</label>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="Other" name="fault-type[]">Other</label>
                    </div>
           <br>  
                <div class="form-group">
                    <label for="date">Date Logged: &nbsp;&ensp;&ensp;</label>
                    <input type="date" name="date-of-log">
                </div>

                <div class="form-group">
                    <label for="date">Date Completed:</label>
                    <input type="date" name="date-of-complete">
                </div>
<br>
                <div class="form-group">
                    <label for="comment">Additional Notes of Fault:</label>
                    <textarea class="form-control" rows="3" id="" name="additional-notes"></textarea>
                </div>
        </div>
</div>
        <hr>

            
										
									</div>
								</div>
							</div>
						</div><!-- /.job-page-wrapper -->
					</div><!-- /.content-wrapper -->
				</div><!-- /.container -->

	        </div> <!-- .st-content-inner -->
	      </div> <!-- .st-content -->
	    </div> <!-- .st-pusher -->
	</body>
</html>
';

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

//$pdf_gen = $dompdf->output();

// Output the generated PDF to Browser
$dompdf->stream();

//$full_path = 'C:\xampp\htdocs\truck-assist-beta-new/dompdf/dompdf.pdf';
//if(!file_put_contents($full_path, $pdf_gen)){
//''echo 'Not OK!';
//}else{
//echo 'OK';
?>