<?php
 include('connect.php');
 session_start();
 $uid = uniqid().time();

 if(empty($_POST['post'])){
 	echo 'Type a comment';
 }
 else{
//$today = gmdate('Y-m-d');
 	//$date = gmdate('d M Y');
 	//$country = $_POST['country'];

 	 $ip = $_SERVER['REMOTE_ADDR'];

    $ch1 = curl_init();
    curl_setopt ($ch1, CURLOPT_URL, "https://geolocation-db.com/json/0f761a30-fe14-11e9-b59f-e53803842572/".$ip);
    curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);

    $html1 = curl_exec($ch1);
    curl_close($ch1);

    $result1 = json_decode($html1,true);
                
    $country = $result1["country_name"];

    $city = $result1["state"];

 	$name = mysqli_real_escape_string($con, $_POST['name']);
 	$email = mysqli_real_escape_string($con, $_POST['email']);
 	//$date = mysqli_real_escape_string($con, $_POST['date']);
 	$post = mysqli_real_escape_string($con, $_POST['post']);
 	//$date = mysqli_real_escape_string($con, $_POST['date']);
 	$uuid = mysqli_real_escape_string($con, $_POST['uuid']);
    //$country = mysqli_real_escape_string($con, $_POST['country']);
    $date = $_POST['date'];

 	$insert = mysqli_query($con, "insert into comments (id,uid,puid,name,email,country,comment,date) 
 		values('','$uid','$uuid', '$name','$email','$country','$post','$date')");
 	if($insert){
 		echo 'success';

 		//$_SESSION['NetworkUser1'] = $email;
            
        //setcookie('NetworkUser1', $email, time()+60*60*24*365);
 	}
 	else{
 		echo 'error';
 	}


 }
?>