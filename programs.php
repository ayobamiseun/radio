<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Programs | Super 96.3 FM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('meta.php'); ?>

<?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.
";
    $title = 'SuperFM 96.3';

     $url = "http://superfm963.com/programs";

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

<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/episodes.css">
<link rel="stylesheet" type="text/css" href="styles/episodes_responsive.css">

<style type="text/css" media="screen">
	.pcon {
			margin: 7px;
			margin-bottom: 10px;
			border-bottom:1px dotted #ccc !important;
			padding-bottom: 5px;

		}

		.pcon .p-time {
			font-weight: 600; 
			font-size: 14px;
			color: #333;
		}

		.pcon .p-title {
			font-size: 16px;
			color: #666;
			margin-top: 2px;
		}

		.pcon .p-host {
			font-size: 13px;
			color: #1F88A4;
			margin-top: 2px;
		}
</style>

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Menu -->

	<div class="home" style="height: 150px;">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_content">
				<div class="home_title"><h1>Programs</h1></div>
			</div>
		</div>
	</div>

	<!-- Episodes -->

	<div class="episodes">
		<div class="container">
			
			<div>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item" role="presentation">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Weekday shows</a>
					  </li>
					  <li class="nav-item" role="presentation">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Saturday shows</a>
					  </li>
					  <li class="nav-item" role="presentation">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Sunday shows</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

					  	<div class="row">
					  		<?php 

                  

			                  $sqlsh = mysqli_query($con,"select * from shows where puid = '5e6dd45ccb21f1584256092' order by odr asc");
			                  while ($rowsh = mysqli_fetch_array($sqlsh)) {
			                    $oapsh = $rowsh['oap'];
			                    $titlesh = $rowsh['title'];
			                    $timesh = $rowsh['time'];
			                    $uidsh = $rowsh['uid'];
			                    $puidsh = $rowsh['puid'];
			                    $detailssh = $rowsh['details'];

			                    $sqlap = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oapsh'");
			                    $rowap = mysqli_fetch_array($sqlap);

			                    $nameap = $rowap['name'];
			                    $nickap = $rowap['nick'];
			                    $pictureap = $rowap['picture'];

			                    echo '

			                        <div class="col-md-3">
			                        	<div class="pcon">
									  		<div class="p-time">'.$timesh.'</div>
									  		<div class="p-title">'.$titlesh.' - '.$detailssh.'</div>
									  		<div class="p-host">'.$nickap.'</div>
									  	</div>
			                        </div>

					  				';
			                  }

			              ?>

					  	</div>
					  

					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

					  	<div class="row">
							<?php 

                 
			                  $sqlsh2 = mysqli_query($con,"select * from shows where puid = '5e6dd5201e5fa1584256288' order by odr asc ");
			                  while ($rowsh2 = mysqli_fetch_array($sqlsh2)) {
			                    $oaps2 = $rowsh2['oap'];
			                    $titlesh2 = $rowsh2['title'];
			                    $timesh2 = $rowsh2['time'];
			                    $uidsh2 = $rowsh2['uid'];
			                    $puidsh2 = $rowsh2['puid'];
			                    $details2 = $rowsh['details'];

			                    $sqlap2 = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oaps2'");
			                    $rowap2 = mysqli_fetch_array($sqlap2);

			                    $nameap2 = $rowap2['name'];
			                    $nickap2 = $rowap2['nick'];
			                    $pictureap2 = $rowap2['picture'];

			                    echo '
			                    	<div class="col-md-3">
			                        <div class="pcon col-md-3">
								  		<div class="p-time">'.$timesh2.'</div>
								  		<div class="p-title">'.$titlesh2.' - '.$details2.'</div>
								  		<div class="p-host">'.$nickap2.'</div>
								  	</div>
								  	</div>
					  				';
			                  }

			            ?>
					  	</div>
					  	
					  	
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	<div class="row">
					  		<?php 

                 
			                  $sqlsh24 = mysqli_query($con,"select * from shows where puid = '5e6dd59696e241584256406' order by odr asc");
			                  while ($rowsh24 = mysqli_fetch_array($sqlsh24)) {
			                    $oaps24 = $rowsh24['oap'];
			                    $titlesh24 = $rowsh24['title'];
			                    $timesh24 = $rowsh24['time'];
			                    $uidsh24 = $rowsh24['uid'];
			                    $puidsh24 = $rowsh24['puid'];
			                    $details24 = $rowsh['details'];

			                    $sqlap24 = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oaps24'");
			                    $rowap24 = mysqli_fetch_array($sqlap24);

			                    $nameap24 = $rowap24['name'];
			                    $nickap24 = $rowap24['nick'];
			                    $pictureap24 = $rowap24['picture'];

			                    echo '
			                    	<div class="col-md-3">
			                        <div class="pcon col-md-3">
								  		<div class="p-time">'.$timesh24.'</div>
								  		<div class="p-title">'.$titlesh24.' - '.$details24.'</div>
								  		<div class="p-host">'.$nickap24.'</div>
								  	</div>
								  	</div>
					  				';
			                  }

			            ?>
					  	</div>
					  	
						</div>
					</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<?php include('footer.php'); ?>

</div>


<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/episodes.js"></script>

<script type="text/javascript">


	
</script>

<?php include('scroll.php'); ?>
</body>
</html>