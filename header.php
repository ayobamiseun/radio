<style type="text/css" media="screen">
	.bg123 {background: #1f2128; position: relative;}

	.heading-section .subheading {
	  font-size: 18px;
	  display: inline-block;
	  margin-bottom: 0;
	  color: #fff;
	  font-size: 18px;
	  font-weight: 600;
	  letter-spacing: 2px;
	  text-transform: uppercase;
	  position: relative; }
	  .heading-section .subheading:after {
	    position: absolute;
	    top: 50%;
	    left: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #fff; }
	  .heading-section .subheading:before {
	    position: absolute;
	    top: 50%;
	    right: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #fff; 
	 }


	 .heading-section2 .subheading2 {
	  font-size: 25px;
	  display: inline-block;
	  margin-bottom: 10px;
	  color: #333;
	  font-size: 18px;
	  font-weight: 600;
	  letter-spacing: 2px;
	  text-transform: uppercase;
	  position: relative; }
	  .heading-section2 .subheading2:after {
	    position: absolute;
	    top: 50%;
	    left: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #333; }
	  .heading-section2 .subheading2:before {
	    position: absolute;
	    top: 50%;
	    right: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #333; 
	 }

	 .heading-section3 .subheading3 {
	  font-size: 20px;
	  display: inline-block;
	  margin-bottom: 0;
	  color: #fff;
	  font-size: 18px;
	  font-weight: 600;
	  letter-spacing: 2px;
	  text-transform: uppercase;
	  position: relative; }
	  .heading-section3 .subheading3:after {
	    position: absolute;
	    top: 50%;
	    left: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #fff; }
	  .heading-section3 .subheading3:before {
	    position: absolute;
	    top: 50%;
	    right: -60px;
	    content: '';
	    -webkit-transform: translateY(-50%);
	    -ms-transform: translateY(-50%);
	    transform: translateY(-50%);
	    width: 50px;
	    height: 1px;
	    margin-top: -1px;
	    background: #fff; 
	 }

	.element {
	  animation: pulse 2s infinite;
	}

	@keyframes pulse {
	  0% {
	    color: #ffffff;
	  }
	  20% {
	    color: #ffffff;
	  }
	  40% {
	    color: #FCF033;
	  }
	  100% {
	   color: #187CEC;
	  }
	}

	.counter{
	    font-family: 'Heebo', sans-serif;
	    text-align: center;
	    width: 71px;
	    padding: 8px 0 55px;
	    margin: 0 auto;
	    position: relative;
	    z-index: 1;
	}
	.counter:before{
	    content: '';
	    background: #9B16FF;
	    height: 70px;
	    width: 70px;
	    border-radius: 50% 50%  20px;
	    transform: rotate(45deg);
	    position: absolute;
	    left: 0;
	    top: 0;
	    z-index: -1;
	}
	.counter .counter-content{
	    color: #fff;
	    height: 55px;
	    width: 55px;
	    margin: 0 auto;
	    border-radius: 50%;
	    line-height: 47px;
	    box-shadow: 0 0 1px rgba(0, 0, 0, 0.5),0 0 0 1px #eee;
	    cursor: pointer;
	}

	.counter .counter-content h3 i{
		font-size: 35px;
		line-height: 55px;
		text-align: center;
		cursor: pointer;
	}

	.counter h3{
	    font-size: 17px;
	    font-weight: 600;
	    letter-spacing: 1px;
	    text-transform: uppercase;
	    margin: 0 0 10px;
	}
	.counter .counter-value{
	    font-size: 35px;
	    font-weight: 600;
	    line-height: 30px;
	    display: block;
	}
	.counter:hover .counter-value{ text-shadow: 0 0 4px rgba(0, 0, 0, 0.5) }
	.counter .counter-icon{
	    color: #fff;
	    font-size: 25px;
	    transform: translateX(-50%);
	    position: absolute;
	    left: 50%;
	    bottom: 4px;
	    transition: all 0.3s;
	}
	.counter:hover .counter-icon i{
	    transform: rotateY(0);
	    transition: all 0.3s;
	}
	.counter:hover .counter-icon i{
	    transform: rotateY(360deg);
	    text-shadow: 0 0 5px rgba(0, 0, 0, 0.6);
	}
	.counter.magenta:before,
	.counter.magenta .counter-content:before{
	    background-color: #d11094;
	}
	.counter.red:before,
	.counter.red .counter-content:before{
	    background-color: #d82222;
	}
	.counter.blue:before,
	.counter.blue .counter-content:before{
	    background-color: #344aba;
	}
	@media screen and (max-width:990px){
	    .counter{ margin-bottom: 30px; }
	}

	.button_fill
	{
		display: inline-block;
		height: 42px;
		background: #2e3038;
		border-radius: 21px;
		-webkit-transition: all 200ms ease;
		-moz-transition: all 200ms ease;
		-ms-transition: all 200ms ease;
		-o-transition: all 200ms ease;
		transition: all 200ms ease;
	}
	.button_fill:hover
	{
		background: #ff3500;
		box-shadow: 0px 10px 55px rgba(0,0,0,0.55);
	}

	.img,
	.blog-img,
	.user-img {
	  background-size: cover;
	  background-repeat: no-repeat;
	  background-position: center center; 
	}

	.block-21 .blog-img {
	  display: block;
	  height: 80px;
	  width: 80px; }

	.block-21 .text {
	  width: calc(100% - 100px); }
	  .block-21 .text .heading {
	    font-size: 18px;
	    font-weight: 300; }
	    .block-21 .text .heading a {
	      color: #000000; }
	      .block-21 .text .heading a:hover, .block-21 .text .heading a:active, .block-21 .text .heading a:focus {
	        color: #1077D2; }
	  .block-21 .text .meta > div {
	    display: inline-block;
	    font-size: 12px;
	    margin-right: 5px; }
	    .block-21 .text .meta > div a {
	      color: gray; }
		  .brd
{
    border: 1px solid #e2eded;
    border-color: #eaf1f1 #e4eded #dbe7e7 #e4eded;
}





.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.box select {
  background-color: #0563af;
  color: white;
  padding: 12px;
  width: 170px;
  border: none;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: button;
  outline: none;
}

.box::before {
  content: "\f13a";
  font-family: FontAwesome;
  position: absolute;
  top: 0;
  right: 0;
  width: 20%;
  height: 100%;
  text-align: center;
  font-size: 28px;
  line-height: 45px;
  color: rgba(255, 255, 255, 0.5);
  background-color: rgba(255, 255, 255, 0.1);
  pointer-events: none;
}

.box:hover::before {
  color: rgba(255, 255, 255, 0.6);
  background-color: rgba(255, 255, 255, 0.2);
}

.box select option {
  padding: 30px;
}
@media (max-width:700px) {
	.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-0%, -50%);
}
}


</style>
<script src="js/jquery-3.3.1.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
	
</script> -->
<div style="background:#303639; height: auto; padding:5px 10px;">
	<div class="container">
		<div class="pull-left " style="font-size: 12px;">
			<span class="fa fa-phone"></span> +(234) 8127536923
		</div>
		 <div class="pull-right" style="font-size: 12px;">
			<span class="fa fa-envelope"></span> info@superfm963.com
		</div>
		<div class="col-md-12 heading-section text-center ftco-animate ">
            <!-- <span class="subheading element">Super 96.3 FM</span> -->
			<span class="subheadin elemen">
			
			</span>
            <!--<h2 class="mb-2">Sponsor Mandarin language Translation on TV and Radio</h2>-->
        </div>
       
	</div>
</div>

<header class="header bg123 trans_400" style="">

		<!-- Logo -->
		
		<div class="logo col-6" style="padding:0px !important; margin:0px !important;">
			<!--<a href="#"><span>Kings</span>Radio<img src="images/play.png" alt=""></a>-->
			<img src="apple-icon.png" style="width: 65px;">
			
			<!-- <form id="app-cover">
            <div id="select-box" onchange="location = this.value;">
                    <input type="checkbox" id="options-view-button" value="index.php">
                    <div id="select-button" class="brd" >
                            <div id="selected-value" >
                                <span>Select Your State</span>
                            </div>
                            <div id="chevrons">
                                    <i class="fas fa-chevron-up"></i>
                                    <i class="fas fa-chevron-down"></i>
                            </div>
                    </div>
                    <div id="options" >
                            <div class="option" value="www.google.com">
								<option value=""></option>
                                   
                                    <i class="fab fa-codepen" value="music.php"></i>
                                    <span class="label" value="music.php">PH</span>
                                    <span class="opt-val" value="music.php">PH</span>
                            </div>
                            <div class="option" value="www.google.com">
                                    <input class="s-c top" type="radio" name="platform" value="https://www.google.com/">
                                    <input class="s-c bottom" type="radio" name="platform" value="https://www.google.com/">
                                    <i class="fab fa-dribbble"></i>
									<a href="https://superfm963.com/"><span class="label">Abuja</span></a>
                                    
									 <a href="https://superfm963.com/"><span class="label">Abuja</span></a> -->
                                    
                           <!-- </div>
                            <div class="option" value="www.google.com">
                                    <input class="s-c top" type="radio" name="platform" value="behance">
                                    <input class="s-c bottom" type="radio" name="platform" value="behance">
                                    <i class="fab fa-behance"></i>
                                    <span class="label">Lagos</span>
                                    <span class="opt-val">Lagos</span>
                            </div>
                            
                            <div id="option-bg"></div>
                    </div>
            </div>
    </form> -->
	<!-- <select id="year" >
    <option value="music.php">-- Year --</option>
    <option value="2010">2010</option>
    <option value="2011">2011</option>
    <option value="2012">2012</option>
    <option value="2013">2013</option>
    <option value="2014">2014</option>
    <option value="2015">2015</option>
</select> -->
 
<!-- <select  onchange="location.href = this.value;">
<option value="music.php">gdgds</option>
<option value="news.php">ghdhdj</option>
</select>  -->
<div class="box">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value="https://google.com">Option 1</option>
    <option value="https://google.com">Option 2</option>
    <option value="https://google.com">Option 3</option>
    <option>Option 4</option>
    <option>Option 5</option>
  </select>
</div>

		</div>
		
		

		<div class="container">
			<div class="row">
			<div class="col">
			
			</div>
				<div class="col">

					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-start justify-content-start">
								<li><a href="http://superfm963.com">Home</a></li>
								<li><a href="about">About</a></li>
								<li><a href="programs">Programs</a></li>
								<li><a href="oap">OAPs</a></li>
								<li><a href="music">Music</a></li>
								<li><a href="videos">Videos</a></li>
								<li><a href="podcasts">Podcasts</a></li>
								<li><a href="blog">Blog</a></li>
								<li><a href="contact">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Submit & Social -->
		<div class="header_right d-flex flex-row align-items-start justify-content-start">

			<!-- Submit -->
			<!-- <div class="submit"><a href="music-premiere">Premiere your song</a></div> -->
			
			<!-- Social -->
			<div class="social">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="https://www.facebook.com/superfmradio96.3/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/superfm96.3/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://soundcloud.com/user-499370435" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
					<!--<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>-->
					<li><a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Hamburger -->
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			
		</div>
		
	</header>

	<div class="menu">
		
		<div class="menu_content d-flex flex-column align-items-end justify-content-start">
			<ul class="menu_nav_list text-right">
				<li><a href="http://superfm963.com">Home</a></li>
				<li><a href="about">About</a></li>
				<li><a href="programs">Programs</a></li>
				<li><a href="oap">OAPs</a></li>
				<li><a href="music">Music</a></li>
				<li><a href="videos">Videos</a></li>
				<li><a href="podcasts">Podcasts</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
			<div class="menu_extra d-flex flex-column align-items-end justify-content-start">
				<div class="menu_submit"><a href="music-premiere">Premiere your song</a></div>
				<div class="social">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="https://www.facebook.com/superfmradio96.3/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="https://www.instagram.com/superfm96.3/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a  href="https://soundcloud.com/user-499370435" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>-->
						<li><a href="#" target="_blank><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>
		

	
/*
Reference: http://jsfiddle.net/BB3JK/47/
*/



	</script>