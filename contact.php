<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include('meta.php'); ?>

<?php 
      $image = "ms-icon-310x310.png";
      $description = "King Radio is a global internet based Christian Station at the peak of propagation of the gospel through Christian programming with the objective to provide a platform by which diverse needs of various groups of people, denominations, organizations and persons can be catered and satisfied through broadcast programs.";
      $title = 'Videos | KingsRadio';
      $url = "http://kingsradio.org/about";
   ?>

   <meta name="description" content="<?php echo $description; ?>">


   <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta itemprop="description" content="<?php echo $description; ?>">
    <meta itemprop="image" content="<?php echo $image; ?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">
    <meta property="og:site_name" content="<?php echo $title; ?>"/>

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">
    <meta name="twitter:url" content="<?php echo $url; ?>" />
  <meta name="twitter:card" content="<?php echo $image; ?>" />


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_content">
				<div class="home_title"><h1>Contact</h1></div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Intro -->
					<!--<div class="intro">
						<div class="section_title text-center"><h1>Get in touch</h1></div>
						<div class="intro_text text-center">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a bibendum sem. Fusce dignissim et diam quis pretium. 
Etiam efficitur semper accumsan. Sed et dui aliquet, ultrices tellus non, sagittis magna. Nullam justo quam, vestibulum non magna et, tempus tincidunt est. Ut laoreet magna ac luctus lacinia. Aliquam eget neque turpis. Phasellus nibh ex, tristique a magna ac, convallis tincidunt diam. Nulla facilisi. Phasellus porta sapien sit amet tortor rhoncus mattis.</p>
						</div>
						<div class="button_fill intro_button text-center ml-auto mr-auto"><a href="#">read more</a></div>
					</div>-->

					<!-- Contact Form -->

					<div class="contact_form_container" style="margin-top: 0px;">
						<div class="contact_form_title text-center">Send a message</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-2">

								<?php
			                           // include('connect.php');


			                           if(isset($_POST['submit'])){

			                                if(empty($_POST['name']) || empty($_POST['email'])){

			                                     echo '<div class="alert alert-danger alert-dismissable">
			                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                                            Please complete the form.
			                                                         </div>';
			                                }
			                                else{

			                                     $security = $_POST['security'];
			                                     if($security == 16){

			                                        $name = $_POST['name'];
			                                          $email = $_POST['email'];
			                                          $phone = $_POST['phone'];
			                                          $message = $_POST['message'];

			                                      

			                                          $msg = '
			                                             
			                                             <p><b>Name : </b> '.$name.' </p>

			                                             <p><b>Email : </b> '.$email.'</p>

			                                             <p><b>Phone : </b> '.$phone.'</p>

			                                             <p><b>Message : </b> '.$message.'</p>

			                                             

			                                             
			                                             <p> Thank you.</p>';

			                                             $to = 'info@kingsradio.org';
			                                             $from_name = $name;
			                                             //$from_email = "info@futureafricaleadersawards.org";
			                                             //$subject = "Africa Day 2016 Registration completed";
			                                             $from_email = $_POST['email'];
			                                             $subject = "Contact";
			                                             $message = $msg;

			                                              $headers = 'From: ' .$from_name.' <'.$from_email.'>'. PHP_EOL .
			                                                    'Cc: "Williams Brain" <brain4us@gmail.com>' . PHP_EOL .
			                                                    'Cc: "KngsRadio" <kingsradio1@gmail.com>' . PHP_EOL .
			                                                    //'Cc: "Taliaviano" <taliavianotravels@gmail.com>' . PHP_EOL .
			                                                    //'Cc: "Taliaviano" <speakwithtaliaviano@gmail.com>' . PHP_EOL .
			                                                    'X-Mailer: PHP-' . phpversion() . PHP_EOL.
			                                                    'Content-type: text/html; charset=iso-8859-1';
			                                                    if(mail($to, $subject, $message, $headers)){

			                                                         echo '<div class="alert alert-success alert-dismissable">
			                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                                            Successfully submited
			                                                         </div>';
			                                                    }
			                                                    else{
			                                                         echo '<div class="alert alert-danger alert-dismissable">
			                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                                            Error occured , please try again later
			                                                         </div>';
			                                                    }

			                                     }
			                                     else{
			                                        echo '<div class="alert alert-danger alert-dismissable">
			                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                                            Wrong security answer
			                                                         </div>';
			                                     }

			                                          
			                                }
			                                          
			                           }
			                           else{
			                              echo '<div class="alert alert-info alert-dismissable">
			                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			                                    Please complete the form
			                                 </div>';
			                           }
			                         ?>

								<form action="#" method="post" id="contact_form" class="contact_form">
									
									<div><input type="text" class="contact_input" name="name" placeholder="Name" required="required"></div>
									<div><input type="text" class="contact_input" name="email" placeholder="Email"></div>
									<div><input type="text" class="contact_input" name="phone" placeholder="Phone number"></div>
									<div><textarea class="contact_input contact_textarea" name="message" placeholder="Message" required="required"></textarea></div>
									 <div class="form-group">
	                                    <label>Security check. What is 12 + 4  = ?</label>
	                                    <input class="form-control contact_input" type="text" name="security" placeholder="" required="required">
	                                </div>
									<input class="contact_button button_fill ml-auto mr-auto" type="submit" name="submit" value="Send" />
								</form>
							</div>
						</div>	
					</div>

					
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter --

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title light text-center"><h1>Join my Newsletter</h1></div>
					<div class="newsletter_text text-center">
						<p>Stay on track with the latest information about our podcasts, guests, special guest and giveaways.</p>
					</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_form_container">
						<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-md-between justify-content-start" id="newsletter_form">
							<input type="email" class="newsletter_input" required="required">
							<button class="newsletter_button button_fill">subscribe now!</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
<?php include('footer.php'); ?>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
<?php include('scroll.php'); ?>
</body>
</html>