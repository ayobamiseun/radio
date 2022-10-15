<!DOCTYPE html>
<html lang="en">
<head>
<title>News | Super 96.3 FM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<?php include('meta.php'); ?>

<?php 
      $image = "ms-icon-310x310.png";
       $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.";
      $title = 'News | Super 96.3 FM';
      $url = "http://superfm963.com/news";
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
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_content">
				<div class="home_title"><h1>News</h1></div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Sidebar -->
				

				<!-- Blog -->
				<div class="col-lg-9 blog_col order-lg-2w order-1w">
					<div class="blog_posts">

						<?php 
							include('connect.php');

							$p = $_REQUEST['page'];
								
							if(empty($p)){
								$pag = 0 * 10;
							}
							else{
								if($p == 1){
									$pag = 0;
								}
								else{
									$pag = $p * 10;
								}
								
							}

							$sqln = mysqli_query($con,"select * from posts order by odr asc, id desc limit $pag,10");
				            while ($rown = mysqli_fetch_array($sqln)) {
				              $uidn = $rown['uid'];
				              $blg_title = $rown['title'];
				              $blg_title_uid = $rown['title_uid'];
				              $blg_thumb = $rown['thumb'];
				              $blg_date = $rown['date'];
				              $descp = strip_tags(substr($rown['details'], 0,500)).'...';

				              $sql2 = mysqli_query($con, "select id from comments where puid  = '$uidn'");
				              $num = mysqli_num_rows($sql2);

				              echo '<div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
									<div class="blog_post_image">
										<img src="'.$blg_thumb.'" alt="">
										<div class="blog_post_date"><a href="news-post?id='.$blg_title_uid.'">'.$blg_date.'</a></div>
									</div>
									<div class="blog_post_content">
										<div class="blog_post_title"><a href="news-post?id='.$blg_title_uid.'">'.$blg_title.'</a></div>
										<div class="blog_post_author">By <a href="#">Admin</a></div>
										<div class="blog_post_text" style="margin:0px; padding:0px;">
											<p>'.$descp.'</p>
										</div>
										<div class="blog_post_link"><a href="news-post?id='.$blg_title_uid.'">Read More</a></div>
									</div>
								</div>';

				            }


						?>
						
						<!-- Blog Post --
						<div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="blog_post_image">
								<img src="images/blog_1.jpg" alt="https://unsplash.com/@kellysikkema">
								<div class="blog_post_date"><a href="#">Sept 25, 2018</a></div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">How to start your podcast</a></div>
								<div class="blog_post_author">By <a href="#">Michael Smith</a></div>
								<div class="blog_post_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae est. Ut nibh nisl, malesuada nec massa nec, molestie varius lorem. Mauris aliquet eros eu luctus pulvinar. Suspendisse dapibus iaculis tellus, dignissim posuere felis elementum a.</p>
								</div>
								<div class="blog_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Blog Post --
						<div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="blog_post_image">
								<img src="images/blog_2.jpg" alt="https://unsplash.com/@flysi3000">
								<div class="blog_post_date"><a href="#">Sept 25, 2018</a></div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">Branding Stategy for your podcast</a></div>
								<div class="blog_post_author">By <a href="#">Michael Smith</a></div>
								<div class="blog_post_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae est. Ut nibh nisl, malesuada nec massa nec, molestie varius lorem. Mauris aliquet eros eu luctus pulvinar. Suspendisse dapibus iaculis tellus, dignissim posuere felis elementum a.</p>
								</div>
								<div class="blog_post_link"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- Blog Post --
						<div class="blog_post d-flex flex-md-row flex-column align-items-start justify-content-start">
							<div class="blog_post_image">
								<img src="images/blog_3.jpg" alt="https://unsplash.com/@gohrhyyan">
								<div class="blog_post_date"><a href="#">Sept 25, 2018</a></div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">10 rules for a succesful podcast</a></div>
								<div class="blog_post_author">By <a href="#">Michael Smith</a></div>
								<div class="blog_post_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae est. Ut nibh nisl, malesuada nec massa nec, molestie varius lorem. Mauris aliquet eros eu luctus pulvinar. Suspendisse dapibus iaculis tellus, dignissim posuere felis elementum a.</p>
								</div>
								<div class="blog_post_link"><a href="#">Read More</a></div>
							</div>
						</div>-->

					</div>

					<div class="row page_nav_row">
						<div class="col">
							<div class="page_nav d-flex flex-row align-items-center justify-content-center">
								<ul class="d-flex flex-row">
									
									<?php
										$sqlv = mysqli_query($con,"select id from posts");
										$numv = mysqli_num_rows($sqlv);
										$div = ceil($numv / 10);

										$p = $_REQUEST['page'];
										
										if(empty($p)){
											$page = 1;
										}
										else{
											$page = $p;
										}

										//$page = 114;
										$end = $page + 9;

										if($end >= $div){
											$end = $page;
											$x = $page - 9;
										}
										else{
											$x = $page;
										}

										

										if($div > 10){
											if($page > 1){
												echo '<li><a href="?page=1"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>';
											}

											$fx = $end;
											
											while($x <= $fx) {
												if($x == $page){
													echo '<li class="active"><a href="?page='.$x.'">'.$x.'</a></li>';
												}
												else{
													echo '<li><a href="?page='.$x.'">'.$x.'</a></li>';
												}
												
												$x++;
											}

											if($end >= $div){
												
											}
											else{
												echo '<li><a href="?page='.$div.'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>';
											}
										}


									 ?>
									<!--<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>-->
									<!--<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 order-lg-1w order-2w sidebar_colw">
					<div class="sidebar">
						
						<!-- Search -->
						<div class="sidebar_search">
							<div class="sidebar_title">Search</div>
							<form action="#" class="search_form" id="search_form">
								<input type="text" class="search_input" placeholder="Search here" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories --
						<div class="sidebar_list">
							<div class="sidebar_title">Categories</div>
							<ul>
								<li><a href="#">Travel</a></li>
								<li><a href="#">Music</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Social Media</a></li>
								<li><a href="#">Art</a></li>
								<li><a href="#">Audiobooks</a></li>
								<li><a href="#">Documentaries</a></li>
							</ul>
						</div>-->

						<!-- Tags --
						<div class="sidebar_tags">
							<div class="sidebar_title">Tags</div>
							<div class="tags">
								<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
									<li><a href="#">music</a></li>
									<li><a href="#">art</a></li>
									<li><a href="#">technology</a></li>
									<li><a href="#">travel & food</a></li>
									<li><a href="#">viral</a></li>
									<li><a href="#">interview</a></li>
									<li><a href="#">social media</a></li>
									<li><a href="#">development</a></li>
									<li><a href="#">success</a></li>
									<li><a href="#">did you know?</a></li>
									<li><a href="#">live</a></li>
								</ul>
							</div>
						</div>-->

						<!-- Archive --
						<div class="sidebar_archive">
							<div class="sidebar_title">Archive</div>
							<div class="dropdown">
								<ul>
									<li class="dropdown_selected d-flex flex-row align-items-center justify-content-start"><span>September 2018</span><i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
										<ul>
											<li><a href="#">August 2018</a></li>
											<li><a href="#">July 2018</a></li>
											<li><a href="#">June 2018</a></li>
											<li><a href="#">May 2018</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</div>-->
					</div>
				</div>

			</div>

			<!-- Page Nav -->
			
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
<script src="js/blog.js"></script>
<?php include('scroll.php'); ?>
</body>
</html>