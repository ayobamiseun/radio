<?php 
  include('connect.php');
  function check_in_range($start_date, $end_date, $date_from_user)
    {
      // Convert to timestamp
      $start_ts = strtotime($start_date);
      $end_ts = strtotime($end_date);
      $user_ts = strtotime($date_from_user);

      // Check that user date is between start & end
      return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
    }

    function in_next($start_date, $end_date, $date_from_user)
    {
      // Convert to timestamp
      $start_ts = strtotime($start_date);
      $end_ts = strtotime($end_date);
      $user_ts = strtotime($date_from_user);

      // Check that user date is between start & end
      return (($user_ts == $start_ts) && ($user_ts <= $end_ts));
    }
  error_reporting(0);

  $ip = $_SERVER['REMOTE_ADDR'];

    $ch1 = curl_init();
    curl_setopt ($ch1, CURLOPT_URL, "https://geolocation-db.com/json/0f761a30-fe14-11e9-b59f-e53803842572/".$ip);
    curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);

    $html1 = curl_exec($ch1);
    curl_close($ch1);

    $result1 = json_decode($html1,true);
                
    $country = $result1["country_name"];

    $city = $result1["state"];

    $hour = gmdate("h")+1;
    $time = gmdate(":i a");
    $date = gmdate("M-d-Y ").$hour.$time;

    $date2 = gmdate('Y-m-d');

    $insert = mysqli_query($con, "insert into app_visitors (id, fingerprint, uuid, ip, country,city, date, date2,device)
      values('0','$ip', '', '$ip', '$country','$city', '$date','$date2','Web')");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Super 96.3 FM | Your 1# family, lifestyle and entertaining urban radio station</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('meta.php'); ?>

<?php 
    $image = 'http://superfm963.com/android-icon-192x192.png'; 
    $description = "Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges.
";
    $title = 'Super 96.3 FM | Your 1# family, lifestyle and entertaining urban radio station';
?>

    <meta name="description" content="Super FM is a family, lifestyle and entertaining zeitgeist and urban radio station set up in Ijebu Ode (Abeokuta) to transmit commercially viable, relevant and strategic programs/shows that impacts and influence the people of its environs through creating a consistent marketing network and providing real answers to life’s present Questions and challenges">

    <meta name="msapplication-TileImage" content="<?php echo $image; ?>">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta itemprop="description" content="<?php echo $description; ?>">
    <meta itemprop="image" content="<?php echo $image; ?>">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://superfm963.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <meta property="og:image" content="<?php echo $image; ?>">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $image; ?>">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/style233.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

 <link rel="stylesheet" href="whataspp/floating-wpp.css">

<style type="text/css" media="screen">

.post-slide{
    margin: 0 15px;
    background: #fff;
    border-bottom: 1px solid #dedde1;

}
.post-slide .post-header{
    padding: 15px 20px;
}
.post-slide .title{
    margin-bottom: 5px;
}
.post-slide .title a{
    font-size: 15px;
    color: #333;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 0.4s ease 0s;
}
.post-slide .title a:hover{
    color: #fd6058;
    text-decoration: none;
}
.post-slide .post-bar{
    margin: 15px 0 0 0;
    padding: 0;
    list-style: none;
}
.post-slide .post-bar li{
    display: inline-block;
    margin-right: 20px;
    color: #808080;
}
.post-slide .post-bar li a{
    font-size: 15px;
    color: #808080;
    text-transform: capitalize;
}
.post-slide .post-bar li a:hover{
    text-decoration: none;
    color: #fd6058;
}
.post-slide .post-bar li img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
}
.post-slide .post-bar li i,
.post-slide .post-bar li img{
    margin-right: 5px;
}
.post-slide .pic{
    overflow: hidden;
    position: relative;
}
.post-slide .pic:after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(255,255,255,0);
    transition: all 0.9s ease 0s;
}
.post-slide:hover .pic:after{
    background: rgba(255,255,255,0.2);
}
.post-slide .pic img{
    width: 100%;
    height: auto;
    transform: rotate(0deg) scale(1,1);
    transition: all 0.6s ease-in-out 0s;
}
.post-slide:hover .pic img{
    transform: rotate(10deg) scale(1.5,1.5);
}
.post-slide .post-category{
    padding: 5px 15px;
    margin: 0;
    list-style: none;
    position: absolute;
    bottom: 0;
    left: 0;
    background: #fd6058;
    z-index: 1;
}
.post-slide .post-category li{
    display: inline-block;
    text-transform: uppercase;
}
.post-slide .post-category li:after{
    content: " ,";
    color: #fff;
}
.post-slide .post-category li:last-child:after{
    content: "";
}
.post-slide .post-category li a{
    color: #fff;
}
.post-slide .post-category li a:hover{
    text-decoration: none;
    color: #333;
}
.post-slide .post-description{
    font-size: 16px;
    color: #808080;
    padding: 15px;
}
@media only screen and (max-width: 480px) {
    .post-header .post-bar li{
        margin-right: 5px;
    }
}
	
.owl-controls .owl-buttons{
    margin-top:0px;
    position:relative;
}
.owl-controls .owl-prev{
    position: absolute;
    left: 0px;
    bottom: 230px;
    padding: 8px 17px;
    background:#333;
    transition:background 0.50s ease;
}
.owl-controls .owl-next{
    position: absolute;
    right: 0px;
    bottom: 230px;
    padding:8px 17px;
    background:#333;
    transition:background 0.50s ease;
}
.owl-controls .owl-prev:after,
.owl-controls .owl-next:after{
    content:"\f104";
    font-family: FontAwesome;
    color: #d3d3d3;
    font-size:16px;
}
.owl-controls .owl-next:after{
    content:"\f105";
}
.owl-controls .owl-prev:hover,
.owl-controls .owl-next:hover{
    background: #e74c3c;
}
@media only screen and (max-width: 990px) {
    .post-slide{
        margin: 0px;
    }
    .owl-controls .owl-buttons .owl-prev{
        left:0px;
        padding:5px 14px;
    }
    .owl-controls .owl-buttons .owl-next{
        right:0px;
        padding:5px 14px;
    }
}
@media only screen and (max-width: 767px){
    .owl-controls .owl-buttons .owl-prev{
        left:0px;
        bottom: 260px;
    }
    .owl-controls .owl-buttons .owl-next{
        right:0px;
        bottom: 260px;
    }
}

		.pricingTable{
            
            margin: 0px;
            background: #fff;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .NpricingTable{
            
            margin: 0px;
            background: #fff;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            height: 100%;
        }

        .NpricingTable p {
        	margin: 5px;
        	text-align: left;

        }

        .NpricingTable .rm{
            
            margin:5px;
            padding: 5px;
            border: 1px solid #999;
            border-radius: 10px;
            text-align: center; 
            width: 100px;
            font-size: 13px;
        }

        .NpricingTable h3 {
        	margin: 5px;
        	text-align: left;
        	font-size: 20px;
        	color: #666;

        }

        .pricingTable h3 {
        	text-align: left;
        	color: #fff;
        }

        .pricingTable p {
        	text-align: left;
        	color: #fff;
        }

        .pricingTable:hover{ box-shadow: 0 0 10px rgba(195, 67, 67, 0.3) inset,0 0 20px -5px rgba(0,0,0,0.8); }
        .pricingTable .pricingTable-header{
            padding: 20px 15px 45px;
            background: #66ce04;
            position: relative;
            width: 100%;
            height: 100%
        }

        .pricingTable .pricingTable-header1{
            padding: 20px 15px 45px;
            background: #66ce04;
            position: relative;
            width: 100%;
            height: 100%
        }

        .pricingTable .pricingTable-header:before{
            content: "";
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: repeating-radial-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.2) 20%);
            position: absolute;
            top: -180%;
            right: -40%;
            transition: all 0.5s ease 0s;
        }

        .pricingTable .pricingTable-header1:before{
            content: "";
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: repeating-radial-gradient(rgba(255,255,255,0.05), rgba(255,255,255,0.2) 20%);
            position: absolute;
            top: -180%;
            right: 50%;
            transition: all 0.5s ease 0s;
        }

        .pricingTable:hover .pricingTable-header:before{ right: 50%; }
        .pricingTable:hover .pricingTable-header1:before{ right: -40%; }

        .pricingTable .title{
            font-size: 25px;
            color: #fff;
            margin: 0;
        }
        
        
        .pricingTable.blue .pricingTable-header,
        .pricingTable.blue .pricingTable-signup{ background: #342F12; }
        .pricingTable.blue .pricingTable-header1,
        .pricingTable.blue .pricingTable-signup{ background: rgba(52, 47, 18, 0.8); }
        .pricingTable.blue .pricing-content li i{ color: #342F12; }
        .pricingTable.pink .pricingTable-header,
        .pricingTable.pink .pricingTable-signup{ background: #F1C04F; }
        .pricingTable.pink .pricing-content li i{ color: #F1C04F; }
        .pricingTable.purple .pricingTable-header,
        .pricingTable.purple .pricingTable-signup{ background: rgba(188, 51, 252,0.8); }
        .pricingTable.purple .pricing-content li i{ color: #417658; }
        .pricingTable.grey .pricingTable-signup{ background: #251D0E; }
        .pricingTable.grey .pricing-content li i{ color: #251D0E; }


        .demo{ background: #e5e5e5; }
		.our-team{
		    border: 2px solid #126DC8;
		    border-radius: 10px;
		    text-align: center;
		    margin: 10px;
		    z-index: 1;
		    position: relative;
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

		.newsletter
		{
			padding-top: 74px;
			padding-bottom: 166px;
		}
		.newsletter_text
		{
			max-width: 510px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 18px;
		}
		.newsletter_text p
		{
			font-size: 16px;
			font-weight: 300;
			color: #FFFFFF;
			line-height: 1.5;
		}
		.newsletter_row
		{
			margin-top: 63px;
		}
		.newsletter_form_container
		{
			width: 100%;
		}
		.newsletter_form
		{
			display: block;
		}
		.newsletter_input
		{
			display: block;
			width: calc(100% - 260px);
			height: 54px;
			background: #FFFFFF;
			border: none;
			outline: none;
			border-radius: 27px;
			font-size: 18px;
			color: #1f2128;
			padding-left: 30px;
		}
		.newsletter_button
		{
			width: 230px;
			height: 54px;
			border: none;
			outline: none;
			border-radius: 27px;
			color: #FFFFFF;
			font-size: 18px;
			font-weight: 500;
			text-transform: uppercase;
			cursor: pointer;
		}
		
		.pcon {
			margin: 7px;
			margin-bottom: 10px;

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
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php include('header.php'); ?>

	<!-- Menu -->

	<!-- Home -->

	<section>
		<div class="container1" style="background:#D0E4EA;">
			<div class="row" style="height: auto; padding: 10px;">
				<div class="col-md-8" style="padding-right: 0px;">
					<!--<img src="images/banner111.jpg" style="width: 100%;" class="img-responsive">-->
					<div style="border-radius: 15px; overflow: hidden;">
						<div id="news-slider2" class="owl-carousel">
							<?php 

		                        $sqlbn = mysqli_query($con,"select * from banner where status != 'off' order by odr asc");
		                        while ($rowbn = mysqli_fetch_array($sqlbn)) {
		                            $urlbn = $rowbn['link'];
		                            $imagebn = $rowbn['image'];
		                            $titlebn = $rowbn['title'];

		                            if(empty($urlbn)){
		                                echo '
		                                    

		                                    <div>
							                    <img src="'.$imagebn.'" style="width: 100%;" alt="">
							                    
							                </div>

		                                ';
		                            }
		                            else{

		                                echo '
		                                    
		                                    
		                                    <div>
		                                     <a href="'.$urlbn.'" target="_blank" style="width: 100%; height: 100%;">
							                    <img src="'.$imagebn.'" style="width: 100%;" alt="">
							                  </a>
							                    
							                </div>

		                                ';
		                            }
		                        }
		                    ?>

			                <!--<div>
			                    <img src="images/banner112.jpg" style="width: 100%;" alt="">
			                    
			                </div>
			 
			                <div>
			                    <img src="images/banner112.jpg" style="width: 100%;" alt="">
			                </div>-->
			            </div>
		        	</div>
				</div>

				<div class="col-md-4">
					
					<div class="" style="height: 33.3%; padding:5px;">
						<div class="pricingTable purple" style="background:url('images/sup1.jpg') center center; background-size: cover;">
                            <div class="pricingTable-header">
                            	<p>On Air</p>
                                <!--<h3>Super Drive with SuperGirl</h3>-->
                                <?php 

                                	//date_default_timezone_set("Africa/Lagos");

                                	$day =  gmdate('l');

                                	if($day == "Sunday"){
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd59696e241584256406' order by odr asc");
                                	}
                                	else if($day == "Saturday"){
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd5201e5fa1584256288' order by odr asc");
                                	}
                                	else{
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd45ccb21f1584256092' order by odr asc");
                                	}

                                	$savTime = "";
                                	
                                    while ($rows1v = mysqli_fetch_array($sqls1v)) {
                                        $titles = $rows1v['title'];
                                        $times = $rows1v['time'];
                                        $uids = $rows1v['uid'];
                                        $odrs = $rows1v['odr'];
                                        $oaps = $rows1v['oap'];
                                        $details = $rows1v['details'];

                                          //$ad_date = gmdate('Y/m/d');

									      $ex = explode('-', $times);
									      $start_date = $ex[0];
									      $end_date = $ex[1];


									      $h = gmdate('h')+1;
									      $date_from_user = $h.''.gmdate(':i A');
									       //$date_from_user = gmdate('d/m/Y');

									       //echo '<p> Current Time '.$start_date.' '.$end_date.'</p>';

									      //11/08/2020 11/08/2020

									      

									      if(!empty($start_date) && !empty($end_date)){

									        if(check_in_range($start_date, $end_date, $date_from_user) == 1){
									          //echo '<p> Current Time '.$details.' / '.$date_from_user.'</p>';
									        	$savTime = $end_date;
									          echo '<h3>'.$details.'</h3>';
									          '<p>'.$oaps.'</p>';
									        } 

									        
									      }

									      if (strtotime($start_date) <= strtotime($date_from_user) || strtotime($end_date) > strtotime($date_from_user)) {
											   //echo '<font color="white">Time '.$details.'</font>';
										  }

									       
                                                   
                                      }

                                      		/*$van_besch = '9:00 AM';
											$tot_besch = '11:00 AM';

											$van = '7:00 AM';
											$tot = '8:00 AM';

											if (strtotime($van) < strtotime($van_besch) || strtotime($tot ) > strtotime($tot_besch)) {
											   echo '<font color="white">Time '.$van_besch.' - '.$tot_besch.'</font>';
											}*/

											/*if ((strtotime($van_besch) >= strtotime($van)) && (strtotime($tot_besch) <= strtotime($tot))) {
											    echo '<font color="red">Time '.$van_besch.' - '.$tot_besch.' Not available</font>';
											}*/

                                	 
								      

                                ?>
                            </div>
                            
                        </div>
					</div>

					<div class="" style="height: 33.3%; padding:5px;">
						<div class="pricingTable blue" style="background:url('images/banner111.jpg') center center; background-size: cover;">
                            <div class="pricingTable-header1">
                                <p>Up Next - <?php echo $savTime; ?></p>
                                <!--<h3>News at 9pm</h3>-->
                                <?php 
                                	$day =  gmdate('l');

                                	if($day == "Sunday"){
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd59696e241584256406' order by odr asc");
                                	}
                                	else if($day == "Saturday"){
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd5201e5fa1584256288' order by odr asc");
                                	}
                                	else{
                                		$sqls1v = mysqli_query($con,"select * from shows where puid = '5e6dd45ccb21f1584256092' order by odr asc");
                                	}

                                	
                                	
                                    while ($rows1v = mysqli_fetch_array($sqls1v)) {
                                        $titles = $rows1v['title'];
                                        $times = $rows1v['time'];
                                        $uids = $rows1v['uid'];
                                        $odrs = $rows1v['odr'];
                                        $oaps = $rows1v['oap'];
                                        $details = $rows1v['details'];

                                          //$ad_date = gmdate('Y/m/d');

									      $ex = explode('-', $times);
									      $start_date = $ex[0];
									      $end_date = $ex[1];


									      $h = gmdate('h')+1;
									      $date_from_user = $h.''.gmdate(':i A');
									       //$date_from_user = gmdate('d/m/Y');

									       //echo '<p> Current Time '.$start_date.' '.$end_date.'</p>';

									      //11/08/2020 11/08/2020

									      

									      if(!empty($start_date) && !empty($end_date)){

									        if(in_next($start_date, $end_date, $savTime) == 1){
									          //echo '<p> Current Time '.$details.' / '.$date_from_user.'</p>';
									        	
									          echo '<h3>'.$details.'</h3>';
									          '<p>'.$oaps.'</p>';
									        } 

									        
									      }

									           
                                      }
                                ?>
                            </div>
                            
                        </div>
					</div>

					<div class="" style="height: 33.3%; padding:5px;">
						<div class="NpricingTable">
							
							<div class="row" style="width: 100%; height: 100%; padding:0px; margin:0px">

                                 <?php

                                    $sqlbl = mysqli_query($con,"select * from posts order by id asc limit 1");
                                    while ($rowbl = mysqli_fetch_array($sqlbl)) {
                                      $uidbl = $rowbl['uid'];
                                      $titlebl = strip_tags(substr($rowbl['title'], 0,50)).'..';
                                      //$detailsbl = strip_tags(substr($rowbl['details'], 0,100)).'..';
                                      $title_uidbl = $rowbl['title_uid'];
                                      $thumbbl = $rowbl['thumb'];
                                      $datebl = $rowbl['date'];

                                    
                                      echo '
                                            <div class="col-sm-8">
                                                <p>Latest news</p>
                                                <h3>'.$titlebl.'</h3>

                                                <div href="" class="rm" style="text-align: center !important;">
                                                    <a href="news-post?id='.$title_uidbl.'">Read more</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4" style="margin-right: 0px; padding-right: 0px;">
                                                <div style="background:url('.$thumbbl.') center center; background-size: cover; width: 100%; height: 100%;">
                                                    
                                                </div>
                                            </div>

                                          
                                            ';
                                    }

                                ?>
								<!--<div class="col-xs-8">
									<p>Latest news</p>
									<h3>Music festa global with TB1</h3>

									<div class="rm">
										Read more
									</div>
								</div>
								<div class="col-xs-4" style="margin-right: 0px; padding-right: 0px;">
									<div style="background:url('images/tb1p.jpg') center center; background-size: cover; width: 100%; height: 100%;">
										
									</div>
								</div>-->
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	
	
	<div class="home" style="height: auto; padding:30px 0px;">
		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
		<div class="home_container1">
			<div class="container">
				<div class="row">

					<?php 
						$sqlpod = mysqli_query($con,"select * from recent_podcast where status = 'on' order by id desc limit 1");
						while ($rowpod = mysqli_fetch_array($sqlpod)) {
							$pod_uid = $rowpod['uid'];
							$pod_title = $rowpod['title'];
							$pod_details = $rowpod['details'];
							$pod_link = $rowpod['link'];
							$pod_date = $rowpod['date'];
							$pod_date2 = $rowpod['date2'];

							echo '<div class="col">
								<div class="home_content">
									<div class="tags">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<!--<li><a href="#">lifestyle</a></li>
											<li><a href="#">interview</a></li>-->
											<li><a href="#">Latest Podcast</a></li>
										</ul>
									</div>
									<div class="home_title"><h1>'.$pod_title.'</h1></div>
									<div class="home_subtitle">'.$pod_details.'</div>
									<div class="track_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a href="#">'.$pod_date2.'</a></li>
											<!--<li><a href="#">Music</a></li>
											<li>56:40</li>
											<li><a href="#">0 Comments</a></li>-->
										</ul>
									</div>
								
									<div class="track track_home">
										<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/'.$pod_link.'%3Fsecret_token%3Ds-HPY6LE4hdDs&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=false"></iframe>
									</div>
									<div class="button_border home_button trans_200"><a href="#">Show More</a></div>
								</div>
							</div>';

						}

					?>

					<!--<div class="col">
						<div class="home_content">
							<div class="tags">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="#">Music</a></li>
									
								</ul>
							</div>
							<div class="home_title"><h1>This kind of Life</h1></div>
							<div class="home_subtitle">By TB1</div>
							<div class="track_info">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="#">August 24, 2020</a></li>
									<li><a href="#">Music</a></li>
									<li>56:40</li>
									<li><a href="#">0 Comments</a></li>
								</ul>
							</div>
							<div class="track track_home">
								<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/884547832&color=%23ff5500&auto_play=false&hide_related=true&show_comments=false&show_user=false&show_reposts=false&show_teaser=false"></iframe>
							</div>
							<div class="button_border home_button trans_200"><a href="#">Download song</a></div>
						</div>
					</div>-->
				</div>
			</div>
		</div>


	</div>

	<section style="background: #F3F4F5; padding:20px 0px;">
		<div class="container">
			<div class="col-md-12 heading-section2 text-center ftco-animate ">
	            <span class="subheading2">Our OAPs</span>
	            <!--<h2 class="mb-2">Sponsor Mandarin language Translation on TV and Radio</h2>-->
	        </div>
			
			<div>
				<div id="news-slider3" class="owl-carousel">

					<?php 

		                $sqloaps = mysqli_query($con,"select name,nick,picture from oaps order by odr asc");
		                while ($rowoaps = mysqli_fetch_array($sqloaps)) {
		                  $nameoaps = $rowoaps['name'];
		                  $nickoaps = $rowoaps['nick'];
		                  $pictureoaps = $rowoaps['picture'];

		                  echo '
		                      <div class="our-team">
				                <img src="'.$pictureoaps.'">
				                <div class="team-content">
				                    <h3 class="title">'.$nameoaps.'</h3>
				                    <span class="post">'.$nickoaps.'</span>
				                    
				                </div>
				            </div>
				            ';
		                }

		            ?>

					<!--<div class="our-team">
		                <img src="images/t1.jpg">
		                <div class="team-content">
		                    <h3 class="title">Williamson</h3>
		                    <span class="post">Web Developer</span>
		                    
		                </div>
		            </div>

		            <div class="our-team">
		                <img src="images/t2.jpg">
		                <div class="team-content">
		                    <h3 class="title">Williamson</h3>
		                    <span class="post">Web Developer</span>
		                    
		                </div>
		            </div>

		            <div class="our-team">
		                <img src="images/t3.jpg">
		                <div class="team-content">
		                    <h3 class="title">Williamson</h3>
		                    <span class="post">Web Developer</span>
		                    
		                </div>
		            </div>

		            <div class="our-team">
		                <img src="images/t5.jpg">
		                <div class="team-content">
		                    <h3 class="title">Williamson</h3>
		                    <span class="post">Web Developer</span>
		                    
		                </div>
		            </div>

		            <div class="our-team">
		                <img src="images/t4.jpg">
		                <div class="team-content">
		                    <h3 class="title">Williamson</h3>
		                    <span class="post">Web Developer</span>
		                    <!--<ul class="social">
		                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
		                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
		                    </ul>--
		                </div>
		            </div>-->

			         

			    </div>
			</div>
		</div>
	</section>

	

	<!-- Shows -->

	<div class="shows" style="padding: 20px 0px; margin:10px;">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<div class="col-md-12 heading-section2 text-center ftco-animate ">
			            <span class="subheading2">Programs</span>
			            <!--<h2 class="mb-2">Sponsor Mandarin language Translation on TV and Radio</h2>-->
			        </div>

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
					  	<?php 

                  

			                  $sqlsh = mysqli_query($con,"select * from shows where puid = '5e6dd45ccb21f1584256092' order by odr asc limit 2");
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

			                        <div class="pcon">
								  		<div class="p-time">'.$timesh.'</div>
								  		<div class="p-title">'.$titlesh.' - '.$detailssh.'</div>
								  		<div class="p-host">'.$nickap.'</div>
								  	</div>
					  				';
			                  }

			              ?>
					  	<!--<div class="pcon">
					  		<div class="p-time">5:00 am - 7:00 am</div>
					  		<div class="p-title">Super Drive in the morning</div>
					  		<div class="p-host">Vikoko</div>
					  	</div>

					  	<div class="pcon">
					  		<div class="p-time">5:00 am - 7:00 am</div>
					  		<div class="p-title">Super Drive in the morning</div>
					  		<div class="p-host">Vikoko</div>
					  	</div>-->

					  	<p>
							<a style="font-size: 14px; margin-left: 10px;" href="programs">
							    View more >>
							 </a>
							  
						</p>
						<div class="collapse" id="collapseExample">
							<div class="" style="margin:0px; ">
								<?php 

                  

					                  /*$sqlsh1 = mysqli_query($con,"select * from shows where puid = '5e6dd45ccb21f1584256092' order by odr asc limit 2,0");
					                  while ($rowsh1 = mysqli_fetch_array($sqlsh1)) {
					                    $oapsh1 = $rowsh1['oap'];
					                    $titlesh1 = $rowsh1['title'];
					                    $timesh1 = $rowsh1['time'];
					                    $uidsh1 = $rowsh1['uid'];
					                    $puidsh1 = $rowsh1['puid'];
					                    $details1 = $rowsh['details'];

					                    $sqlap1 = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oapsh1'");
					                    $rowap1 = mysqli_fetch_array($sqlap1);

					                    $nameap1 = $rowap1['name'];
					                    $nickap1 = $rowap1['nick'];
					                    $pictureap1 = $rowap1['picture'];

					                    echo '

					                        <div class="pcon">
										  		<div class="p-time">'.$timesh1.''.$details1.'</div>
										  		<div class="p-title">'.$titlesh1.'</div>
										  		<div class="p-host">'.$nickap1.'</div>
										  	</div>
							  				';
					                  }*/

					            ?>
							    <!--<div class="pcon">
							  		<div class="p-time">5:00 am - 7:00 am</div>
							  		<div class="p-title">Super Drive in the morning</div>
							  		<div class="p-host">Vikoko</div>
							  	</div>

							  	<div class="pcon">
							  		<div class="p-time">5:00 am - 7:00 am</div>
							  		<div class="p-title">Super Drive in the morning</div>
							  		<div class="p-host">Vikoko</div>
							  	</div>-->
							 </div>
						</div>

					  </div>
					  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  	<?php 

                 
			                  $sqlsh2 = mysqli_query($con,"select * from shows where puid = '5e6dd5201e5fa1584256288' order by odr asc limit 2");
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
			                        <div class="pcon">
								  		<div class="p-time">'.$timesh2.'</div>
								  		<div class="p-title">'.$titlesh2.' - '.$details2.'</div>
								  		<div class="p-host">'.$nickap2.'</div>
								  	</div>
					  				';
			                  }

			            ?>
					  	

					  	<p>
							<a style="font-size: 14px; margin-left: 10px;" href="programs">
							    View more >>
							 </a>
						</p>
						<div class="collapse" id="collapseExample1">
							<div class="" style="margin:0px; ">
								<?php 

                  

					                  /*$sqlsh13 = mysqli_query($con,"select * from shows where puid = '5e6dd5201e5fa1584256288' order by odr asc limit 2,0");
					                  while ($rowsh13 = mysqli_fetch_array($sqlsh13)) {
					                    $oapsh13 = $rowsh13['oap'];
					                    $titlesh13 = $rowsh13['title'];
					                    $timesh13 = $rowsh13['time'];
					                    $uidsh13 = $rowsh13['uid'];
					                    $puidsh13 = $rowsh13['puid'];

					                    $sqlap13 = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oapsh13'");
					                    $rowap13 = mysqli_fetch_array($sqlap13);

					                    $nameap13 = $rowap13['name'];
					                    $nickap13 = $rowap13['nick'];
					                    $pictureap13 = $rowap13['picture'];

					                    echo '

					                        <div class="pcon">
										  		<div class="p-time">'.$timesh13.'</div>
										  		<div class="p-title">'.$titlesh13.'</div>
										  		<div class="p-host">'.$nickap13.'</div>
										  	</div>
							  				';
					                  }*/

					            ?>
							    
							 </div>
							</div>
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	
					  	<?php 

                 
			                  $sqlsh24 = mysqli_query($con,"select * from shows where puid = '5e6dd59696e241584256406' order by odr asc limit 2");
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
			                        <div class="pcon">
								  		<div class="p-time">'.$timesh24.'</div>
								  		<div class="p-title">'.$titlesh24.' - '.$details24.'</div>
								  		<div class="p-host">'.$nickap24.'</div>
								  	</div>
					  				';
			                  }

			            ?>

					  	<p>
							<a href="programs" style="font-size: 14px; margin-left: 10px;" >
							    View more >>
							 </a>
							  
						</p>
						<div class="collapse" id="collapseExample2">
							<div class="" style="margin:0px;">
								<?php 

					                  /*$sqlsh14 = mysqli_query($con,"select * from shows where puid = '5e6dd59696e241584256406' order by odr asc limit 2,0");
					                  while ($rowsh14 = mysqli_fetch_array($sqlsh14)) {
					                    $oapsh14 = $rowsh14['oap'];
					                    $titlesh14 = $rowsh14['title'];
					                    $timesh14 = $rowsh14['time'];
					                    $uidsh14 = $rowsh14['uid'];
					                    $puidsh14 = $rowsh14['puid'];

					                    $sqlap14 = mysqli_query($con,"select name,nick,picture from oaps where nick = '$oapsh14'");
					                    $rowap14 = mysqli_fetch_array($sqlap14);

					                    $nameap14 = $rowap14['name'];
					                    $nickap14 = $rowap14['nick'];
					                    $pictureap14 = $rowap14['picture'];

					                    echo '

					                        <div class="pcon">
										  		<div class="p-time">'.$timesh14.'</div>
										  		<div class="p-title">'.$titlesh14.'</div>
										  		<div class="p-host">'.$nickap14.'</div>
										  	</div>
							  				';
					                  }*/

					            ?>
							    
							</div>
					  	</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="col-md-12 heading-section2 text-center ftco-animate ">
			            <span class="subheading2">Podcasts</span>
			            <!--<h2 class="mb-2">Sponsor Mandarin language Translation on TV and Radio</h2>-->
			        </div>

			        <div class="row" style="margin-top: 5px;">
			        	<?php 

			        		$sqlm = mysqli_query($con,"select * from podcasts order by id desc limit 3");
							while ($rowm = mysqli_fetch_array($sqlm)) {
								$m_uid = $rowm['uid'];
								$m_title = $rowm['title'];
								$m_thumb = $rowm['art'];
								//$m_genres = $rowm['genres'];

								echo '
									
									<div class="col-md-4 col-sm-6">
										<div class="show">
											<div class="show_image">
												<a href="podcast?id='.$m_uid.'">
													<img src="'.$m_thumb.'" style="width: 100%;" alt="image">
													<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
													<!--<div class="show_title_2">Cras malesuada ipsum sapien.</div>-->
												</a>
												
											</div>

										</div>
										<div class="show_title_21">'.$m_title.'</div>
									</div>

									';
							}

			        	?>
			        	<!--<div class="col-md-4 col-sm-6">
							<div class="show">
								<div class="show_image">
									<a href="episode.html">
										<img src="images/show_5.jpg" style="width: 100%;" alt="https://unsplash.com/@gohobo">
										<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
										<!--<div class="show_title_2">Cras malesuada ipsum sapien.</div>--
									</a>
									
								</div>

							</div>
							<div class="show_title_21">Cras malesuada ipsum sapien.</div>
						</div>--

						<div class="col-md-4 col-sm-6">
							<div class="show">
								<div class="show_image">
									<a href="episode.html">
										<img src="images/show_5.jpg" style="width: 100%;" alt="https://unsplash.com/@gohobo">
										<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
										<!--<div class="show_title_2">Cras malesuada ipsum sapien.</div>--
									</a>
									<!--<div class="show_tags">
										<div class="tags">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">lifestyle</a></li>
											</ul>
										</div>
									</div>--
								</div>
							</div>--
						</div>

						<div class="col-md-4 col-sm-6">
							<div class="show">
								<div class="show_image">
									<a href="episode.html">
										<img src="images/show_5.jpg" style="width: 100%;" alt="https://unsplash.com/@gohobo">
										<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
										<!--<div class="show_title_2">Cras malesuada ipsum sapien.</div>-->
									</a>
									<!--<div class="show_tags">
										<div class="tags">
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">lifestyle</a></li>
											</ul>
										</div>
									</div>--
								</div>
							</div>
						</div>-->
			        </div>

			        <div class="row" style="margin-top: 10px;">
						<div class="col text-center">
							<div class="button_fill shows_button"><a href="podcast">View more</a></div>
						</div>
					</div>

				</div>
			</div>
			<div class="row shows_2_row" style="margin-top: 15px;">

				<?php 

					//id, uid, uuid, artist_name, track_name, track_link, track_desc, art, download

					/*$sqlm = mysqli_query($con,"select * from new_release where delStatus != 'deleted' order by id desc limit 4");
					while ($rowm = mysqli_fetch_array($sqlm)) {
						$m_uid = $rowm['uid'];
						$m_title = $rowm['track_name'];
						$m_thumb = $rowm['art'];
						$m_genres = $rowm['genres'];

						echo '<div class="col-xl-3 col-md-6">
								<div class="show">
									<div class="show_image">
										<a href="song?id='.$m_uid.'"">
											<img src="'.$m_thumb.'" style="width: 100%;" alt="https://unsplash.com/@h4rd3n">
											<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
											<div class="show_title_2">'.$m_title.'</div>
										</a>
										<div class="show_tags">
											<div class="tags">
												<ul class="d-flex flex-row align-items-start justify-content-start">
													<li><a href="song?id='.$m_uid.'"">'.$m_genres.'</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>';
					}*/

				?>
				
				<!-- Show --
				<div class="col-xl-3 col-md-6">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/adap.jpg" style="width: 100%;" alt="https://unsplash.com/@h4rd3n">
								<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
								<div class="show_title_2">Cras malesuada ipsum sapien.</div>
							</a>
							<div class="show_tags">
								<div class="tags">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="#">travel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Show --
				<div class="col-xl-3 col-md-6">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/tb1p.jpg" style="width: 100%;" alt="https://unsplash.com/@gohobo">
								<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
								<div class="show_title_2">Cras malesuada ipsum sapien.</div>
							</a>
							<div class="show_tags">
								<div class="tags">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="#">lifestyle</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Show --
				<div class="col-xl-3 col-md-6">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/gilp.jpg" style="width: 100%;" alt="https://unsplash.com/@zacharykeimig">
								<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
								<div class="show_title_2">Cras malesuada ipsum sapien.</div>
							</a>
							<div class="show_tags">
								<div class="tags">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="#">music</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Show --
				<div class="col-xl-3 col-md-6">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/nobp.jpg" style="width: 100%;" alt="https://unsplash.com/@bkview">
								<div class="show_play_icon"><img src="images/play.svg" alt="https://www.flaticon.com/authors/cole-bemis"></div>
								<div class="show_title_2">Cras malesuada ipsum sapien.</div>
							</a>
							<div class="show_tags">
								<div class="tags">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li><a href="#">travel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>-->

			</div>

			
			
		</div>
	</div>

	<!--<div class="shows" style="padding:10px1;">
		<div class="container">

			<div class="row">
				<div class="col-md-6">
					
				</div>

				<div class="col-md-6 episodes_col">
					
				</div>
			</div>

		</div>
	</div>-->

	<div class="shows_2" style="padding:20px 0px;">
		<div class="container">

			<div class="col-md-12 heading-section3 text-center ftco-animate ">
			    <span class="subheading3">Latest Stories</span>
			    <!--<h2 class="mb-2">Sponsor Mandarin language Translation on TV and Radio</h2>-->
			</div>

			<div class="row shows_row" style="margin-top: 20px;">
				
				<?php

					$sqln = mysqli_query($con,"select * from news order by odr asc, id desc limit 3");
		            while ($rown = mysqli_fetch_array($sqln)) {
		              $uidn = $rown['uid'];
		              $titlen = strip_tags(substr($rown['title'], 0,100)).'..';
		              $title_uidn = $rown['title_uid'];
		              $thumbn = $rown['thumb'];
		              $datebn = $rown['date'];

		              $sql2 = mysqli_query($con, "select id from comments where puid  = '$uidn'");
		              $num = mysqli_num_rows($sql2);

		            

		              echo '
		                 
		                <div class="col-lg-4">
							<div class="show">
								<div class="show_image">
									<a href="blog-post?id='.$title_uidn.'">
										<img src="'.$thumbn.'" alt="blog" style="margin-top:5px;">
									</a>
									
								</div>
								<div class="show_content">
									<div class="show_date"><a href="blog-post?id='.$title_uidn.'">'.$datebn.'</a></div>
									<div class="show_title"><a href="blog-post?id='.$title_uidn.'">'.$titlen.'</a></div>
									<div class="show_info d-flex flex-row align-items-start justify-content-start">
										<div class="show_fav d-flex flex-row align-items-center justify-content-start">
											<div class="show_fav_icon show_info_icon"><img class="svg" src="images/heart.svg" alt=""></div>
											<div class="show_fav_count"></div>
										</div>
										<div class="show_comments">
											<a href="#">
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="show_comments_icon show_info_icon"><img class="svg" src="images/speech-bubble.svg" alt=""></div>
													<div class="show_comments_count">'.$num.' Comment(s)</div>
												</div>
											</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
		                    ';
		            }


		           ?>

				<!-- Show --
				<div class="col-lg-4">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/gallery_5_large1.jpg" alt="https://unsplash.com/@icons8">
							</a>
							
						</div>
						<div class="show_content">
							<div class="show_date"><a href="#">24 September, 2018</a></div>
							<div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div>
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
						</div>
					</div>
				</div>

				<!-- Show --
				<div class="col-lg-4">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/gallery_5_large1.jpg" alt="https://unsplash.com/@pawel_czerwinski">
							</a>
							
						</div>
						<div class="show_content">
							<div class="show_date"><a href="#">24 September, 2018</a></div>
							<div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div>
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
						</div>
					</div>
				</div>

				<!-- Show --
				<div class="col-lg-4">
					<div class="show">
						<div class="show_image">
							<a href="episode.html">
								<img src="images/gallery_5_large1.jpg" alt="https://unsplash.com/@trevcole">
							</a>
							
						</div>
						<div class="show_content">
							<div class="show_date"><a href="#">24 September, 2018</a></div>
							<div class="show_title"><a href="episode.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></div>
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
						</div>
					</div>
				</div>-->

			</div>

			<div class="row">
				<div class="col text-center">
					<div class="button_border home_button trans_200"><a href="blog">VIEW MORE</a></div>
				</div>
			</div>

			
		</div>
	</div>


	<!-- Bi Weekly -->

	<div class="newsletter" style="padding:30px 0px; background: url(images/newsletter.jpg) center center; background-size: cover; background-repeat: no-repeat;">
		<!--<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>-->
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title light text-center" style="color:#fff;"><h1>Join our Newsletter</h1></div>
					<div class="newsletter_text text-center">
						<p>Stay on track with the latest information about our podcasts, guests, special guest and giveaways.</p>
					</div>
				</div>
			</div>
			<div class="row newsletter_row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_form_container">
						<form id="fpost" class="newsletter_form d-flex flex-md-row flex-column align-items-md-start align-items-center justify-content-md-between justify-content-start">
							<input type="hidden" name="type" value="Subscription">
							<input type="email" class="newsletter_input" name="email" placeholder="Enter your email here" required="required">
							<div class="newsletter_button button_fill send-report" style="text-align: center; line-height: 40px;">subscribe now!</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	 <div id="myButton" style="z-index: 999999999999;"></div>

	<!-- Footer -->
	<?php include('footer.php') ?>
	
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="whataspp/floating-wpp.js"></script>
<!--<script src="js/boost2.js"></script>-->


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
	    $("#news-slider2").owlCarousel({
	        items : 1,
	        itemsDesktop:[1199,1],
	        itemsDesktopSmall:[980,1],
	        itemsMobile : [600,1],
	        navigation:true,
	        navigationText:["",""],
	        pagination:false,
	        autoPlay:true

	    });

	    $("#news-slider3").owlCarousel({
	        items : 4,
	        itemsDesktop:[1199,4],
	        itemsDesktopSmall:[980,2],
	        itemsMobile : [600,2],
	        navigation:true,
	        navigationText:["",""],
	        pagination:false,
	        autoPlay:true

	    });

	    $('#myButton').floatingWhatsApp({
                phone: '+2348058863963',
                popupMessage: 'Hello, how can we help you?',
                message: "Hi",
                showPopup: true,
                showOnIE: false,
                headerTitle: 'Live Support - Super 96.3 FM',
                headerColor: 'grey',
                backgroundColor: 'blue',
                buttonImage: '<img src="whataspp/whatsapp.svg" />'
        });


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
                    $('.send-report').text("Thank you for subscribing");
                   

                    $('#fpost')[0].reset();
                    
                }
                else if(data == 'error'){
                    $('.send-report').text('Error, try again later');
                }
                else if(data == 'null'){
                    $('.send-report').text('Enter your email');
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