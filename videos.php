<!DOCTYPE html>
<html lang="en">
<head>
<title>Videos | KingsRadio</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="My Podcast template project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('meta.php'); ?>

<?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.
";
    $title = 'Videos | Super 96.3 FM';

     $url = "http://superfm963.com/videos";

    ?>


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

<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Menu -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_content">
				<div class="home_title"><h1>Videos</h1></div>
			</div>
		</div>
	</div>

	<!-- Episodes -->

	<div class="episodes">
		<div class="container">
			<!--<div class="row">
				<div class="col">
					<div class="season_links">
						<ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
							<li class="item_filter_btn" data-filter="*">All Seasons</li>
							<li class="item_filter_btn" data-filter=".s1">Season 1</li>
							<li class="item_filter_btn" data-filter=".s2">Season 2</li>
							<li class="item_filter_btn" data-filter=".s3">Season 3</li>
						</ul>
					</div>
				</div>
			</div>-->
			<div class="row episodes_row" style="margin-top:0px !important;">
				
				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						
						<!-- Search -->
						<div class="sidebar_search">
							<div class="sidebar_title">Search</div>
							<form action="#" class="search_form" id="search_form">
								<input type="text" class="search_input" placeholder="Search here" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
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
						</div>

						<!-- Tags -->
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
						</div>

						<!-- Archive -->
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
						</div>
					</div>
				</div>

				<!-- Episodes -->
				<div class="col-lg-9 episodes_col">
					<div class="episodes_container">


						<?php 

							//id, uid, uuid, artist_name, track_name, track_link, track_desc, art, download
							include('connect.php');

							$sqlv = mysqli_query($con,"select * from videos where status = 'on' order by id desc limit 10");
							$numv = mysqli_num_rows($sqlv);
							while ($rowv = mysqli_fetch_array($sqlv)) {
								$v_uid = $rowv['uid'];
								$v_link = $rowv['link'];

								echo '<iframe width="100%" height="306" frameborder="no" src="'.$v_link.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
							}

						?>
						
						<!-- Episode --
						<div class="episode d-flex flex-row align-items-start justify-content-start s1">
							<div>
								<div class="episode_image">
									<img src="images/episode_1.jpg" alt="">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">music</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a></div>
								<div class="episode_date"><a href="#">24 September, 2018</a></div>
								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count">2371</div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count">88 Comments</div>
											</div>
										</a>	
									</div>
								</div>
								<!-- Player --
								<div class="single_player_container">
									
									<div class="single_player d-flex flex-row align-items-center justify-content-start">
										<div id="jplayer_1" class="jp-jplayer"></div>
										<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-single">
												<div class="player_controls">
													<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
														<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
															<div>
																<div class="jp-controls-holder play_button ml-auto">
																	<button class="jp-play" tabindex="0"></button>
																</div>
															</div>
															<div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div class="jp-play-bar"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
															<div class="d-flex flex-row align-items-center justify-content-start">
																<button class="jp-mute" tabindex="0"></button>
															</div>
															<div class="d-flex flex-row align-items-center justify-content-start">
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="jp-no-solution">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Episode --
						<div class="episode d-flex flex-row align-items-start justify-content-start s1">
							<div>
								<div class="episode_image">
									<img src="images/episode_2.jpg" alt="">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">music</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a></div>
								<div class="episode_date"><a href="#">24 September, 2018</a></div>
								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count">2371</div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count">88 Comments</div>
											</div>
										</a>	
									</div>
								</div>
								<!-- Player --
								<div class="single_player_container">
									
									<div class="single_player d-flex flex-row align-items-center justify-content-start">
										<div id="jplayer_2" class="jp-jplayer"></div>
										<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-single">
												<div class="player_controls">
													<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
														<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
															<div>
																<div class="jp-controls-holder play_button ml-auto">
																	<button class="jp-play" tabindex="0"></button>
																</div>
															</div>
															<div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div class="jp-play-bar"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
															<div class="d-flex flex-row align-items-center justify-content-start">
																<button class="jp-mute" tabindex="0"></button>
															</div>
															<div class="d-flex flex-row align-items-center justify-content-start">
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="jp-no-solution">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Episode --
						<div class="episode d-flex flex-row align-items-start justify-content-start s2">
							<div>
								<div class="episode_image">
									<img src="images/episode_3.jpg" alt="">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">music</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a></div>
								<div class="episode_date"><a href="#">24 September, 2018</a></div>
								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count">2371</div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count">88 Comments</div>
											</div>
										</a>	
									</div>
								</div>
								<!-- Player --
								<div class="single_player_container">
									
									<div class="single_player d-flex flex-row align-items-center justify-content-start">
										<div id="jplayer_3" class="jp-jplayer"></div>
										<div id="jp_container_3" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-single">
												<div class="player_controls">
													<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
														<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
															<div>
																<div class="jp-controls-holder play_button ml-auto">
																	<button class="jp-play" tabindex="0"></button>
																</div>
															</div>
															<div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div class="jp-play-bar"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
															<div class="d-flex flex-row align-items-center justify-content-start">
																<button class="jp-mute" tabindex="0"></button>
															</div>
															<div class="d-flex flex-row align-items-center justify-content-start">
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="jp-no-solution">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						
						<!-- Episode --
						<div class="episode d-flex flex-row align-items-start justify-content-start s2">
							<div>
								<div class="episode_image">
									<img src="images/episode_4.jpg" alt="">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">music</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a></div>
								<div class="episode_date"><a href="#">24 September, 2018</a></div>
								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count">2371</div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count">88 Comments</div>
											</div>
										</a>	
									</div>
								</div>
								<!-- Player --
								<div class="single_player_container">
									
									<div class="single_player d-flex flex-row align-items-center justify-content-start">
										<div id="jplayer_4" class="jp-jplayer"></div>
										<div id="jp_container_4" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-single">
												<div class="player_controls">
													<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
														<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
															<div>
																<div class="jp-controls-holder play_button ml-auto">
																	<button class="jp-play" tabindex="0"></button>
																</div>
															</div>
															<div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div class="jp-play-bar"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
															<div class="d-flex flex-row align-items-center justify-content-start">
																<button class="jp-mute" tabindex="0"></button>
															</div>
															<div class="d-flex flex-row align-items-center justify-content-start">
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="jp-no-solution">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- Episode --
						<div class="episode d-flex flex-row align-items-start justify-content-start s3">
							<div>
								<div class="episode_image">
									<img src="images/episode_5.jpg" alt="">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">music</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="episode_content">
								<div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a></div>
								<div class="episode_date"><a href="#">24 September, 2018</a></div>
								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count">2371</div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count">88 Comments</div>
											</div>
										</a>	
									</div>
								</div>
								<!-- Player --
								<div class="single_player_container">
									
									<div class="single_player d-flex flex-row align-items-center justify-content-start">
										<div id="jplayer_5" class="jp-jplayer"></div>
										<div id="jp_container_5" class="jp-audio" role="application" aria-label="media player">
											<div class="jp-type-single">
												<div class="player_controls">
													<div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
														<div class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
															<div>
																<div class="jp-controls-holder play_button ml-auto">
																	<button class="jp-play" tabindex="0"></button>
																</div>
															</div>
															<div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div class="jp-play-bar"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
															<div class="d-flex flex-row align-items-center justify-content-start">
																<button class="jp-mute" tabindex="0"></button>
															</div>
															<div class="d-flex flex-row align-items-center justify-content-start">
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="jp-no-solution">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>-->

					</div>
				</div>
			</div>
			<div class="row page_nav_row">
				<div class="col">
					<div class="page_nav d-flex flex-row align-items-center justify-content-center">
						<ul class="d-flex flex-row">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
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