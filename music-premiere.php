<!DOCTYPE html>
<html lang="en">
<head>
<title>Music Premiere | Super 96.3 FM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include('meta.php'); ?>

<?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.
";
    $title = 'Music Premiere | Super 96.3 FM';

     $url = "http://superfm963.com/music-premiere";

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

	<div class="home" style="padding:30px 0px; background: url(images/newsletter.jpg) center center; background-size: cover; background-repeat: no-repeat;">
		<!--<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>-->
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_content">
				<div class="home_title"><h1>Music Premiere</h1></div>
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
						<div class="contact_form_title text-center">Complete the form</div>
						<div class="row">
							<div class="col-lg-8 offset-lg-2">

								<form id="fpost" class="contact_form">
									<input type="hidden" name="type" value="MusicPremiere">
									<div><input type="text" class="contact_input" name="name" placeholder="Your Name" required="required"></div>
									<div><input type="text" class="contact_input" name="title" placeholder="Song title" required="required"></div>
									<div><input type="text" class="contact_input" name="email" placeholder="Your Email"></div>
									<div><input type="text" class="contact_input" name="phone" placeholder="Your Phone number"></div>
									<div><textarea class="contact_input contact_textarea" name="details" placeholder="Write a brief about your song" required="required"></textarea></div>

									<div>
										<label for="">Select your music file</label>
										<input type="file" name="file" class="form-control">
									</div>
									
									<!-- <div class="form-group">
	                                    <label>Security check. What is 12 + 4  = ?</label>
	                                    <input class="form-control contact_input" type="text" name="security" placeholder="" required="required">
	                                </div>-->
	                                <div class="contact_button button_fill send-report" style="text-align: center; line-height: 40px; width: 100%;">Submit</div>
									<!--<input class="contact_button button_fill ml-auto mr-auto" type="submit" name="submit" value="Send" />-->
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

<script type="text/javascript">
	$(document).ready(function() {

		$('.send-report').click(function(event) {
			 $('.send-report').text('Please wait..');
			setTimeout(function(){
				SendPost()
			},200);
		});

		function SendPost(){

           var formData = new FormData($('#fpost')[0]);

            $.ajax({
                url: 'ajax_con.php',
                type: 'POST',
                //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                //data: $('#fpost').serialize()
                type: 'POST',
                data: formData,
                //async: false,
                cache: false,
                contentType: false,
                //enctype: 'multipart/form-data',
                processData: false,
                xhr: function(){
                    //upload Progress
                    var xhr = $.ajaxSettings.xhr();
                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', function(event) {
                            var percent = 0;
                            var position = event.loaded || event.position;
                            var total = event.total;
                            if (event.lengthComputable) {
                                percent = Math.ceil(position / total * 100);
                            }
                            //update progressbar
                            //$("#bar1").css("width", + percent +"%");
                            $('.send-report').text("Processing.."+percent +"%");
                        }, true);
                    }
                    return xhr;
                },
                enctype: 'multipart/form-data',
                mimeType:"multipart/form-data"
            })
            .done(function(data) {
                //alert(data);
                if(data == 'success'){
                    $('.send-report').text("Successful. We'll contact you soon");
                   

                    $('#fpost')[0].reset();
                    
                }
                else if(data == 'error'){
                    $('.send-report').text('Error creating post');
                }
                else if(data == 'null'){
                    $('.send-report').text('Complete the form');
                }
                else if(data == 'image'){
                    $('.send-report').text('Select a picture');
                }
                else if(data == 'image_error'){
                    $('.send-report').text('Picture not uploaded');
                }
                else if(data == 'upload'){
                    $('.send-report').text('Song upload error');
                }
                else if(data == 'format'){
                    $('.send-report').text('Invalid audio format');
                }
                else if(data == 'song'){
                    $('.send-report').text('Select a song');
                }
                else{
                    $('.send-report').text('Error, try again later');
                }
            })
            .fail(function() {
                $('.send-report').text('Network error');
            })
            .always(function() {
                console.log("complete");
            });
        }
	});
</script>
<?php include('scroll.php'); ?>
</body>
</html>