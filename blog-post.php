<?php 

							//id, uid, uuid, artist_name, track_name, track_link, track_desc, art, download
							if(isset($_REQUEST['id'])){
								
							}
							include('connect.php');
							
							$title_uid = $_REQUEST['id'];
							$sqlm = mysqli_query($con,"select * from news where title_uid = '$title_uid'");
							$rowm = mysqli_fetch_array($sqlm);
							$m_id = $rowm['id'];
							$m_uid = $rowm['uid'];
							$m_title = $rowm['title'];
							$m_thumb = $rowm['thumb'];
							$m_date = $rowm['date'];
							$m_dat2 = $rowm['date2'];
							$m_details = $rowm['details'];
							$m_views = $rowm['views'];

							$descp = strip_tags(substr($m_details, 0,500));

							$vv = $m_views + 1;

							$upd = mysqli_query($con,"update news set views = '$vv' where uid = '$uid'");

							//$date = gmdate('F d, Y');

							$sqlc = mysqli_query($con,"select id from comments where puid = '$m_uid'");
							$numc = mysqli_num_rows($sqlc);

							
	$ip = $_SERVER['REMOTE_ADDR'];

    $ch1 = curl_init();
    curl_setopt ($ch1, CURLOPT_URL, "https://geolocation-db.com/json/0f761a30-fe14-11e9-b59f-e53803842572/".$ip);
    curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);

    $html1 = curl_exec($ch1);
    curl_close($ch1);

    $result1 = json_decode($html1,true);
                
    $country = $result1["country_name"];

    if(empty($country)){
    	$country = "unknown";
    }

    $city = $result1["state"];


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
    $title = $m_title+' | Super 96.3 FM';

     $url = "http://superfm963.com/blog-post?id=".$title_uid;

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


	<div class="episode_container">

		<!-- Episode Image -->
		

		<div class="container">
			<div class="row">
			
				<div class="col-md-8" style="margin-bottom: 20px;">

					

					<div class="intro">
						<div class="section_title"><?php echo $m_title; ?></div>
						<br />
						<div class="" style="text-align: center; background: #eee; ">
							<!-- Episode Image -->
							<img src="<?php echo $m_thumb; ?>" class="thumbnail" style="max-width: auto; margin:0px auto;" alt="">
						</div>
						<br />

						<div class="intro_text">
							<p><?php echo $m_details; ?></p>
						</div>

						<div style="margin-top: 10px;">

	                         <h6 style="color: #999;">share this post</h6>

	                            <span class="btn btn-primary btn-sm" data-sharer="twitter" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-twitter"></i> </span>

	                            <span class="btn btn-success btn-sm" data-sharer="whatsapp" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-whatsapp"></i> </span>

	                            <span class="btn btn-primary btn-sm" data-sharer="facebook" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-facebook"></i> </span>

	                            <span class="btn btn-danger btn-sm" data-sharer="googleplus" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-google-plus"></i> </span>

	                            <span class="btn btn-secondary btn-sm" data-sharer="email" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-envelope"></i> </span>

	                            <span class="btn btn-primary btn-sm" data-sharer="telegram" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-telegram"></i> </span>

	                            <span class="btn btn-primary btn-sm" data-sharer="linkedin" data-title="<?php echo $m_title; ?>" data-hashtags="Super96.3FM" data-url="http://superfm963.com/blog-post?id=<?php echo $title_uid; ?>"><i class="fa fa-linkedin"></i> </span>

	            		</div>
					</div>
					

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

				<div class="col-md-4">
					<div class="sidebar">

						<!-- Categories -->
						<div class="sidebar_list">
							<div class="sidebar_title">Latest post</div><br />
							<div class="Toplist" style="margin-top: 10px;">
			                 <!--<div class="block-21 mb-4 d-flex">
			                  <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
			                  <div class="text">
			                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
			                    <div class="meta">
			                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
			                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
			                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
			                    </div>
			                  </div>
			                </div>
			                <div class="block-21 mb-4 d-flex">
			                  <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
			                  <div class="text">
			                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
			                    <div class="meta">
			                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
			                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
			                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
			                    </div>
			                  </div>
			                </div>
			                <div class="block-21 mb-4 d-flex">
			                  <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
			                  <div class="text">
			                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
			                    <div class="meta">
			                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
			                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
			                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
			                    </div>
			                  </div>
			                </div>-->
			              </div>
						</div>

						
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

<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-firestore.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

<script type="text/javascript" src="js/fingerprint.js"></script>
<script type="text/javascript" src="js/jquery.timeago.js"></script>
<script type="text/javascript" src="js/store.min.js"></script>

<script>

	var firebaseConfig = {
    apiKey: "AIzaSyAA75MqiDryUEYzfhSPMmCQtnY8CQOBajk",
    authDomain: "superfm-37845.firebaseapp.com",
    databaseURL: "https://superfm-37845.firebaseio.com",
    projectId: "superfm-37845",
    storageBucket: "superfm-37845.appspot.com",
    messagingSenderId: "692479171878",
    appId: "1:692479171878:web:7791f42b80405701a2b5e7",
    measurementId: "G-K9WL8VTNKX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);



  var db = firebase.firestore();


    var country = '<?php echo $country; ?>';
    //var uid = '<?php echo $uid_main; ?>';



  if(store.has("blog_name")){
    $('.myname').val(store.get("blog_name"))
  }

  if(store.has("blog_email")){
    $('.myemail').val(store.get("blog_email"))
  }

	var p1 = "<?php echo $m_id; ?>";
	var title = "<?php echo $m_title; ?>";
	var country = "<?php echo $country ?>";
	//var link = "<?php echo $m_real ?>";

	var uid = "<?php echo $m_uid; ?>";

	/*$("#jplayer_1").jPlayer({
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
			});*/


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

          PostFireComment(name,email,message,time,country,uid);
          
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
          //var country = $('#mycountry').val();

          if(name.length < 1 || email.length < 1 || message.length < 1){
            $(this).text('Complete the form');
          }
          else{

            var time = moment().utcOffset(60).format('YYYY-MM-DD H:mm:ss');

            PostFireComment(name,email,message,time,country,uid);
            
            Ajx_chat(name,email,message,time,uid,country)

            //$('.mymessage').val('');
            
          }
        }
        
     });


      function PostFireComment(name,email,message,time,country,uid){

          store.set("blog_name",name);
	      store.set("blog_email",email);
	        
	        db.collection("NewsComments").doc("newscomments").collection(uid).add({

	        uid: uid,
	        name: name,
	        email: email,
	        country: country,
	        comment: message,
	        date: time
	      })
	      .then(function(docRef) {
	        console.log("Document written with ID: ", docRef.id);
	      })
	      .catch(function(error) {
	        console.error("Error adding document: ", error);
	      });
      }


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


        function GetTopPost(){

            $('.Toplist').html('<div class="fa fa-spin fa-spinner fa-3x icon-spin icon-spinner text-center" style="color:#00000; font-size:20px;"> loading...</div>');
            $.getJSON('j_blog.php',{uid2:uid, limit:5}, function(data) {
              $('.Toplist').html('');
             //alert(data.Feed.length);
              $.each(data.Feed,  function(i,result){

                var newRow = '<div class="block-21 mb-4 d-flex">'
                  +'<a href="blog-post?id='+result.title_uid+'" class="blog-img mr-4" style="background-image: url('+result.thumb+');"></a>'
                  +'<div class="text">'
                   +'<h3 class="heading"><a href="blog-post?id='+result.title_uid+'">'+result.title+'s</a></h3>'
                    +'<div class="meta">'
                      +'<div><a href="#"><span class="icon-calendar"></span> '+result.date+'</a></div>'
                      +'<div><a href="#"><span class="icon-person"></span> Admin</a></div>'
                      +'<div><a href="#"><span class="icon-chat"></span> '+result.comment+'</a></div>'
                    +'</div>'
                  +'</div>'
                +'</div>';

        
                
                $(newRow).appendTo('.Toplist');
           
              });

              

            });
        }

        setTimeout(function(){
          GetTopPost();
        },200);
									

</script>

<?php include('scroll.php'); ?>

</body>
</html>