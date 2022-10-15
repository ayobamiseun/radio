<?php 

							//id, uid, uuid, artist_name, track_name, track_link, track_desc, art, download
							if(isset($_REQUEST['id'])){
								include('connect.php');
							}
							
							$uid = $_REQUEST['id'];
							$sqlm = mysqli_query($con,"select * from podcasts where delStatus != 'deleted' AND uid = '$uid' order by id desc limit 1");
							$rowm = mysqli_fetch_array($sqlm);
							$m_id = $rowm['id'];
							$m_uid = $rowm['uid'];
							$m_title = $rowm['title'];
							$m_thumb = $rowm['art'];
							$m_genres = $rowm['cat'];
							$m_date = $rowm['date'];
							$m_link = $rowm['audio'];
							$m_details = $rowm['details'];
							$m_artist= $rowm['guest'];
							$m_views = $rowm['view_count'];

							$descp = strip_tags(substr($m_details, 0,100));

							$vv = $m_views + 1;

							$upd = mysqli_query($con,"update podcasts set view_count = '$vv' where uid = '$uid'");

							//$date = gmdate('F d, Y');

							$sqlc = mysqli_query($con,"select id from comments where puid = '$m_uid'");
							$numc = mysqli_num_rows($sqlc);

							$orgDate = $m_date;
						    $newDate = date("d F, Y", strtotime($orgDate));
							
							//$m_real = $m_link;

								$m_real = "https://superfm963.com/apps/admin/".$m_link;

								 /*if (strpos($m_link, 'newrelease') !== false) {
								 	$m_real = "http://kingsradio.org/admin/".$m_link;
								 }
								 else if(strpos($m_link, 'music/audio') !== false){
								 	$m_real = "http://kingsradio.org/prime/".$m_link;
								 }
								 else{
								 	$m_real = "http://kingsradio.org/admin/".$m_link;
								 }*/



		

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $m_title; ?> | Super 96.3 FM</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include('meta.php'); ?>


   <?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = $descp;
    $title = $m_title+' | SuperFM 96.3';

     $url = "http://superfm963.com/podcast?id=".$uid;

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
<link rel="stylesheet" type="text/css" href="styles/episode.css">
<link rel="stylesheet" type="text/css" href="styles/episode_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"><h1><?php echo $m_artist; ?> | <?php echo $m_title; ?></h1></div>
							<div class="home_subtitle text-center"><?php echo $newDate; ?></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
		<div class="home_player_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 offset-lg-3">
						
						<!-- Episode -->
						<div class="player d-flex flex-row align-items-start justify-content-start s1">
							<div class="player_content">
								
								<!-- Player -->
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

								<div class="show_info d-flex flex-row align-items-start justify-content-start">
									<div class="show_fav d-flex flex-row align-items-center justify-content-start">
										<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
										<div class="show_fav_count"><?php echo number_format($vv); ?></div>
									</div>
									<div class="show_comments">
										<a href="#">
											<div class="d-flex flex-row align-items-center justify-content-start">
												<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
												<div class="show_comments_count"><?php echo number_format($numc); ?> Comment(s)</div>
											</div>
										</a>	
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Episode -->

	<div class="episode_container">

		<!-- Episode Image -->
		<div class="episode_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<!-- Episode Image -->
						<div class="episode_image"><img src="<?php echo $m_thumb; ?>" alt=""></div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				
				<!-- Sidebar -->
				<div class="col-lg-3 order-lg-1 order-2 sidebar_col">
					<div class="sidebar">

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

				<!-- Episode -->
				<div class="col-lg-9 episode_col order-lg-2 order-1">
					<div class="intro">
						<div class="section_title"><?php echo $m_title; ?></div>
						<div class="intro_text">
							<p><?php echo $m_details; ?></p>
						</div>
					</div>
					<!--<div class="guests">
						<div class="section_title">Guests</div>
						<div class="guests_container d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-start">
							
							<!-- Guest --
							<div class="guest_container">
								<div class="guest">
									<div class="guest_image"><img src="images/guest_1.jpg" alt="https://unsplash.com/@stairhopper"></div>
									<div class="guest_content text-center">
										<div class="guest_name"><a href="#">Michael Smith</a></div>
										<div class="guest_title">Developer</div>
									</div>
								</div>
							</div>

							<!-- Guest --
							<div class="guest_container">
								<div class="guest">
									<div class="guest_image"><img src="images/guest_2.jpg" alt="https://unsplash.com/@eyeforebony"></div>
									<div class="guest_content text-center">
										<div class="guest_name"><a href="#">Samantha Doe</a></div>
										<div class="guest_title">Developer</div>
									</div>
								</div>
							</div>

							<!-- Guest --
							<div class="guest_container">
								<div class="guest">
									<div class="guest_image"><img src="images/guest_3.jpg" alt="https://unsplash.com/@onurozkardes"></div>
									<div class="guest_content text-center">
										<div class="guest_name"><a href="#">James Williams</a></div>
										<div class="guest_title">Developer</div>
									</div>
								</div>
							</div>

						</div>
					</div>-->

					<!-- Comments -->
					<div class="comments" id="comment-con">
						<div class="section_title">Comments</div>
						<div class="comments_container">
							<ul class="MCList">

								<!-- Comment --
								<li class="d-flex flex-row">
									<div>
										<div class="comment_image"><img src="images/avatar5.png" alt=""></div>
									</div>
									<div class="comment_content">
										<div class="user_name"><a href="#">Michael Smith</a> <div class="meta pull-right">Commented <time class="timeago" datetime="'+date+'">'+date+'</time></span></div></div>
										<div class="comment_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae es.</p>
										</div>
									</div>
								</li>

								<!-- Comment --
								<li class="d-flex flex-row">
									<div>
										<div class="comment_image"><img src="images/avatar5.png" alt=""></div>
									</div>
									<div class="comment_content">
										<div class="user_name"><a href="#">Christinne Doe</a></div>
										<div class="comment_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum malesuada tellus a pretium. Proin quam nisi, maximus in pulvinar sed, viverra vitae es.</p>
										</div>
									</div>
								</li>-->

							</ul>
						</div>
					</div>

					<!-- Leave a Comment -->
					<div class="comment_form_container">
						<div class="section_title">Leave a comment</div>
						<form action="#" id="comment_form" class="comment_form">
							<div><input type="text" class="comment_input myname" placeholder="Name" required="required"></div>
							<div><input type="text" class="comment_input myemail" placeholder="Email"></div>
							<!--<div>
								<select name="country" id="mycountry" class="form-control">
									<?php //include('countries.php'); ?>
								</select>
							</div>-->
							<textarea class="comment_input comment_textarea mymessage" placeholder="Message" required="required"></textarea>
							<div class="comment_button button_fill post" style="text-align: center; line-height: 40px; width: 250px;">send</div>
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
<script src="plugins/jPlayer/jquery.jplayer.min.js"></script>
<script src="plugins/jPlayer/jplayer.playlist.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<!--<script src="js/episode.js"></script>-->
<script type="text/javascript" src="js/fingerprint.js"></script>
<script type="text/javascript" src="js/jquery.timeago.js"></script>
<script type="text/javascript" src="js/store.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>

<script>

	var p1 = "<?php echo $m_id; ?>";
	var title = "<?php echo $m_title; ?>";
	var artist = "<?php echo $m_artist ?>";
	var link = "<?php echo $m_real ?>";

	var uid = "<?php echo $uid; ?>";

	$("#jplayer_1").jPlayer({
				ready: function () {
					$(this).jPlayer("setMedia", {
						title:title,
						artist:artist,
							//mp3:"files/bensound-betterdays.mp3"
						mp3:link
					});
				},
				play: function() { // To avoid multiple jPlayers playing together.
					$(this).jPlayer("pauseOthers");
				},
				swfPath: "plugins/jPlayer",
				supplied: "mp3",
				cssSelectorAncestor: "#jp_container_1",
				wmode: "window",
				globalVolume: false,
				useStateClassSkin: true,
				autoBlur: false,
				smoothPlayBar: true,
				keyEnabled: true,
				solution: 'html',
				preload: 'metadata',
				volume: 0.2,
				muted: false,
				backgroundColor: '#000000',
				errorAlerts: false,
				warningAlerts: false
			});


	  function Ajx_chat(name,email,post,date,uid){
         //Materialize.toast("sending",2000);
        $('.post').text('Sending...');

        $.ajax({
          url: 'ajx_chat.php',
          type: 'POST',
          //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
          data: {name:name, email:email, post:post, date:date,uuid:uid},
        })
        .done(function(data) {
          if(data == "success"){
          	 GetComment();
          	 $('.mymessage').val('');
          	 $('html, body').animate({
              scrollTop: $("#comment-con").offset().top
          	  }, 1000);
          	 $('.post').text('Send');
          }
          else{
          	$('.post').text('Error again');
          }

        })
        .fail(function() {
          //Materialize.toast('Connection error',2000);
        })
        .always(function() {
          console.log("complete");
        });
        
      }


	$('.post').click(function(){
        var name = $('.myname').val();
        var email = $('.myemail').val();
        var message = $('.mymessage').val();
        //var country = $('#mycountry').val();

        if(name.length < 1 || email.length < 1 || message.length < 1){
          $(this).text('Complete the form');
        }
        else{

          var time = moment().utcOffset(60).format('YYYY-MM-DD H:mm:ss');
          
          Ajx_chat(name,email,message,time,uid)

          //var message = $('.mymessage').val('');

          
          
        }
      });


      $('.mymessage').keydown(function(event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == "13"){
          event.preventDefault();

          var name = $('.myname').val();
          var email = $('.myemail').val();
          var message = $('.mymessage').val();
          var country = $('#mycountry').val();

          if(name.length < 1 || email.length < 1 || message.length < 1){
            $(this).text('Complete the form');
          }
          else{

            var time = moment().utcOffset(60).format('YYYY-MM-DD H:mm:ss');
            
            Ajx_chat(name,email,message,time,uid,country)

            //$('.mymessage').val('');
            
          }
        }
        
     });

       function GetComment(){

            $('.MCList').html('<div class="fa fa-spin fa-spinner fa-3x icon-spin icon-spinner text-center" style="color:#36c; font-size:40px;"></div>');
            $.getJSON('j_comments.php',{uid:uid}, function(data) {
              $('.MCList').html('');
             //alert(data.Feed.length);
              $.each(data.Feed,  function(i,result){

                var newRow = '<li class="d-flex flex-row">'
									+'<div>'
										+'<div class="comment_image"><img src="images/avatar5.png" alt=""></div>'
									+'</div>'
									+'<div class="comment_content">'
										+'<div class="user_name"><a href="#">'+result.name+'</a>'
										+'<div class="meta pull-right">Commented <time class="timeago" datetime="'+result.date+'">'+result.date+'</time></span></div>'
										+'</div>'
										+'<div class="comment_text">'
											+'<p>'+result.comment+'</p>'
										+'</div>'
									+'</div>'
								+'</li>';

        
                
                $(newRow).appendTo('.MCList');
           
              });

              $("time.timeago").timeago();
              

            });
        }

        GetComment();
									

</script>

<?php include('scroll.php'); ?>

</body>
</html>