<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>OAPs | Super 96.3 FM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('meta.php'); ?>

<?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.
";
    $title = 'SuperFM 96.3';

     $url = "http://superfm963.com/oap";

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

		.demo{ background: #e5e5e5; }
		.our-team{
		    border: 2px solid #126DC8;
		    border-radius: 10px;
		    text-align: center;
		    margin: 10px;
		    z-index: 1;
		    position: relative;
		    margin-bottom: 20px;
		}
		.our-team:before,
		.our-team:after{
		    content: "";
		    width: 100%;
		    height: 104%;
		    background: #126DC8;
		    position: absolute;
		    top: 50%;
		    left: 0;
		    z-index: -1;
		    transform: translateY(-50%) scaleX(0.3);
		    transition: all 0.3s ease 0s;
		}
		.our-team:after{
		    width: 106%;
		    left: 50%;
		    transform: translate(-50%, -50%) scaleY(0.25);
		}
		.our-team:hover:before{ transform: translateY(-50%) scaleX(0.7); }
		.our-team:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }
		.our-team img{
		    width: 100%;
		    height: auto;
		    border-radius: 10px;
		    transition: all 0.3s ease 0s;
		}
		.our-team .team-content{
		    width: 93%;
		    padding: 25px 0 10px;
		    background: #126DC8;
		    position: absolute;
		    bottom: 20px;
		    left: 50%;
		    opacity: 1;
		    -webkit-clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
		    clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
		    transform: translateX(-50%);
		    transition: all 0.3s cubic-bezier(0.5, 0.2,0.1,0.9);
		}
		.our-team:hover .team-content{
		    bottom: 10px;
		    opacity: 1;
		}
		.our-team .title{
		    font-size: 18px;
		    font-weight: 600;
		    color: #fff;
		    letter-spacing: 1px;
		    text-transform: capitalize;
		    margin: 0;
		}
		.our-team .post{
		    display: block;
		    font-size: 14px;
		    color: #fff;
		    text-transform: uppercase;
		    margin-bottom: 10px;
		}
		.our-team .social{
		    padding: 0;
		    margin: 0;
		    list-style: none;
		}
		.our-team .social li{
		    display: inline-block;
		    margin: 0 5px;
		}
		.our-team .social li a{
		    display: block;
		    width: 35px;
		    height: 35px;
		    line-height: 35px;
		    border-radius: 50%;
		    background: #fff;
		    font-size: 20px;
		    color: #ff3232;
		    transition: all 0.3s ease 0s;
		}
		.our-team .social li a:hover{
		    background: linear-gradient(to bottom,#ff3232, darkred);
		    box-shadow: 0 0 0 5px rgba(255,255,255,0.3);
		    color: #fff;
		}
		@media only screen and (max-width: 990px){
		    .our-team{ margin-bottom: 30px; }
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
				<div class="home_title"><h1>Our OAPs</h1></div>
			</div>
		</div>
	</div>

	<!-- Episodes -->

	<div class="episodes">
		<div class="container">
			
			<div>
				<div class="row">
					<?php 

		                $sqloaps = mysqli_query($con,"select name,nick,picture from oaps order by odr asc");
		                while ($rowoaps = mysqli_fetch_array($sqloaps)) {
		                  $nameoaps = $rowoaps['name'];
		                  $nickoaps = $rowoaps['nick'];
		                  $pictureoaps = $rowoaps['picture'];

		                  echo '
		                  	<div class="col-md-3">
		                      <div class="our-team">
				                <img src="'.$pictureoaps.'">
				                <div class="team-content">
				                    <h3 class="title">'.$nameoaps.'</h3>
				                    <span class="post">'.$nickoaps.'</span>
				                    
				                </div>
				            </div>
				            </div>
				            ';
		                }

		            ?>

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

<?php include('scroll.php'); ?>
	
</script>
</body>
</html>